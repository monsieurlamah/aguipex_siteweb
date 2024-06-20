<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Activitie;
use Illuminate\Http\Request;
use App\Models\ImageActivity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\storeActivityRequest;
use App\Http\Requests\updateProductRequest;
use App\Http\Requests\updateActivityRequest;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activitie::where('active', true)->paginate(10);
        return view('backend.activity.list', compact('activities'));
    }

    public function create()
    {
        return view('backend.activity.create');
    }

    public function store(Activitie $activity, storeActivityRequest $request)
    {
        // dd($request->all());
        try {
           

            
            
            
            $activity->title = $request->title;
            $activity->description = $request->description;
            $activity->type = $request->type;
            // $activity->images = $images;
            $activity->date_activitie = $request->date_activitie;
            $activity->save();

             //Enregistrement l'image principale
             $idActivity = $activity->id;
             $imageP = $request->file('image');
             $teaser_imageP = $idActivity . '.' . 'png';
             $destinationPathP = public_path('/assets/activity');
             $imageP->move($destinationPathP, $teaser_imageP);
             DB::table('activities')->where('id', $activity->id)->update(['image'=>$teaser_imageP]);
            //  enregistrement des 4 images  lier a l'activit 
           //  parcourir l'objet image et  enregistrer 
      
           $images = [];
           if ($request->hasFile('images')) {
               foreach ($request->file('images') as $image) {
                    $imageActivities = new ImageActivity();
                    $imageActivities->activitie_id = $idActivity;
                    $imageActivities->images = "";
                    $imageActivities->save();
                    $idImageActivities = $imageActivities->id;
                    $teaser_imageM = $idImageActivities . '.' . 'png';
                    $destinationPathM = public_path('/assets/activity/activities');
                    $image->move($destinationPathM, $teaser_imageM);
                    $imageActivities->images = $teaser_imageM;
                    DB::table('image_activities')->where('id', $idImageActivities)->update(['images'=>$teaser_imageM]);
                    
               }
           }   

           
             
            
            return redirect()->route('activity.index')->with('success', "Activité enrégistrée !");
        } catch (Exception $e) {
            dd($e);
            // throw new Exception("Une erreur est survenue lors de l'ajout de l'activité");
        }
    }

    public function edit(Activitie $activity)
    {
        $images=DB::table('image_activities')->where('activitie_id', $activity->id)->get();

        return view('backend.activity.edit', compact('activity', 'images'));
    }
    
    public function update(Activitie $activity, UpdateActivityRequest $request)
    {
        try {
            $activity->title = $request->title;
            $activity->description = $request->description;
            $activity->type = $request->type;
            $activity->date_activitie = $request->date_activitie;
            $activity->update();
            //Enregistrement l'image principale
            $idActivity = $activity->id;
            $imageP = $request->file('image');
            if ($imageP) {
                $teaser_imageP = $idActivity . '.' . 'png';
                $destinationPathP = public_path('/assets/activity');
                $imageP->move($destinationPathP, $teaser_imageP);
            DB::table('activities')->where('id', $activity->id)->update(['image'=>$teaser_imageP]);
                }
            
            
            $images = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    if ($image) {
                        $imageActivities = new ImageActivity();
                        $imageActivities->activitie_id = $idActivity;
                        $imageActivities->images = "";
                        $imageActivities->save();
                        $idImageActivities = $imageActivities->id;
                        $teaser_imageM = $idImageActivities . '.' . 'png';
                        $destinationPathM = public_path('/assets/activity/activities');
                        $image->move($destinationPathM, $teaser_imageM);
                        $imageActivities->images = $teaser_imageM;
                        $imageActivities->update();
                        // dd($idImageActivities);
                        DB::table('image_activities')->where('id', $idImageActivities)->update(['images'=>$teaser_imageM]);
                    }
                        
                    
                }
            }   
            return redirect()->route('activity.index')->with('success', "Activité mofidiée !");
            
             
        } catch (Exception $e) {
            // Gestion des exceptions
            dd($e);
            throw new Exception('Une erreur est survenue lors de la modification de l\'activité');
        }
    } 

    public function delete(Activitie $activity)
    {
        try {
            // Supprimez l'image si elle existe
            if ($activity->image) {
                Storage::disk('public')->delete($activity->image);
            }
            if ($activity->images) {
                $images = json_decode($activity->images, true);
                foreach ($images as $image) {
                    Storage::delete($image);
                }
            }
            $activity->delete();
            return redirect()->route('activity.index')->with('success_msg', "Activité supprimée !");
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreur survenue lors de la suppression de l'activité");
        }
    }

    public function detail(Activitie $activity)
    {
        // $images = ImageActivity::where('activitie_id', $activity->id)->get();
        $images=DB::table('image_activities')->where('activitie_id', $activity->id)->get();
        // dd($images);
        return view('backend.activity.detail', compact('activity', 'images'));
    }
}
