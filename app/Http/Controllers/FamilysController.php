<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Familys;

class FamilysController extends Controller
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
        // memanggil model familys
        $familys = Familys::orderBy('id', 'desc')->paginate(1);

        return view('family.index', compact('familys'));
        // memakai compact karena memiliki banyak data array. di isi dengan nama variabel yang akan dipanggil
    }

    public function create(){
        return view('family.create');
    }

    public function store(Request $request){
        // Validate the request...
        $request->validate([
            'first_name' => 'required|max:255|',
            'last_name' => 'required|unique:familys|max:255|',
            'number_phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required'

        ]);

        $familys = new Familys;

        $familys->first_name = $request->first_name;
        $familys->last_name = $request->last_name;
        $familys->number_phone = $request->number_phone;
        $familys->address = $request->address;
        $familys->email = $request->email;

        $familys->save();

        return redirect('/familys');

    }

    public function show($id)
    {
        $familys = Familys::where('id', $id)->first();
        // dd($familys);
        return view('family.show', ['familys' => $familys]);
    }

    public function edit($id)
    {
        $familys = Familys::where('id', $id)->first();
        // dd($familys);
        return view('family.edit', ['familys' => $familys]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|max:255|',
            'last_name' => 'required|unique:familys|max:255|',
            'number_phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required'
        ]);

        Familys::find($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'number_phone' => $request->number_phone,
            'address' => $request->address,
            'email' => $request->email
        ]);

        return redirect('/familys');
    }

    public function destroy($id)
    {
        Familys::find($id)->delete();
        return redirect('/familys');

    }
}
