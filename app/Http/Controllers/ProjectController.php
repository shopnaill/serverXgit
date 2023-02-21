<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller {
    // all

    public function index() {

        $projects =  Project::get();

        return view( 'project.index', compact( 'projects' ) );
    }

    // view

    public function view( $id ) {
        $project = Project::findOrFail( $id );

        return view( 'project.view', compact( 'project' ) );
    }

    // deploy_project  via ssh
    public function deploy_project( Request $request ) {
            
    }
    
}
