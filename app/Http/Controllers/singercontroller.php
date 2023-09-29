<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\singer;
use App\Models\song;
use App\Models\singer_song;
class singercontroller extends Controller
{

public function addsongui(){
    return view('admin.addsong');
}

public function addsong(Request $req){
$song=new song();
$song->song_name=$req->sname;
$song->save();
return view('admin.addsong');
}

public function addsingerui(){
    return view('admin.addrolesinger');
}

public function addsinger(Request $req){
$singer=new singer();
$singer->singer_name=$req->sname;
$singer->save();
$songids=song::max('id');
$singer->songs()->attach($songids);
 return view('admin.addrolesinger');
}

/* function showall(){
$singer=s::join('singer_songs','singer_songs.song_id','=','songs.id')
->select(['songs.song_name','singer_songs.id'])->get();
return $singer;
} */


 /* function abc(){
    join('singer_songs','singer_songs.singer_id','=','singers.id')
    
    $singer=new singer();
    $singer->singer_name='salman khan';
    $singer->save();
$songids=[6];
$singer->songs()->attach($songids);
 dd($singer->songs); 
return view('admin.addsong');
} */ 
}
