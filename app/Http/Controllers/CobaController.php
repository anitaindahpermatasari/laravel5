<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Friends;

class CobaController extends Controller
{
    /* public function index()
    {
        return 'test berhasil';
    }

    public function urutan($ke)
    {
// memanggil model firends
        $friends = Friends::paginate(3);

        return view('friend', compact('friends'));
        // memakai compact karena memiliki banyak data array. di isi dengan nama variabel yang akan dipanggil
    }

    public function coba($ke)
    {
        return view('coba');
        // sesuaikan dengan view yang ingin ditampilkan
    }
 */
    public function index(){
        // memanggil model firends
        $friends = Friends::orderBy('id', 'desc')->paginate(1);

        return view('friends.index', compact('friends'));
        // memakai compact karena memiliki banyak data array. di isi dengan nama variabel yang akan dipanggil
    }

    public function create(){
        return view('friends.create');
    }

    public function store(Request $request){
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255|',
            'no_telp' => 'required|numeric',
            'alamat' => 'required'
        ]);

        $friends = new Friends;

        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;

        $friends->save();

        return redirect('/');
    }

    public function show($id)
    {
        $friends = Friends::where('id', $id)->first();
        // dd($friends);
        return view('friends.show', ['friends' => $friends]);
    }

    public function edit($id)
    {
        $friends = Friends::where('id', $id)->first();
        // dd($friends);
        return view('friends.edit', ['friends' => $friends]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friends|max:255|',
            'no_telp' => 'required|numeric',
            'alamat' => 'required'
        ]);

        Friends::find($id)->update([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Friends::find($id)->delete();
        return redirect('/');

    }
}
