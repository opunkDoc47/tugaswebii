<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien_model as pasien;
class pasienControler extends Controller
{
    public function index()
    {
    	$data=pasien::all();
    	return view('pasien.index',compact('data'));
    }
    public function create(){
		return view('pasien.tambah');
	}

	public function store(Request $pasien){
		pasien::create($pasien->all());
		return redirect('pasien');
	}

	public function edit($id){
				//select * from mahasiswa where id=$id
		$pasien = pasien::find($id);
		return view('pasien.ubah', compact('pasien'));
	}

	public function update(Request $pasien, $id){
		$p = $pasien->all();
		pasien::find($id)->update($p);
		return redirect('pasien');
	}
	public function destroy($id)
	{
		pasien::find($id)->delete();
		return redirect('pasien');
		# code...
	}

}
