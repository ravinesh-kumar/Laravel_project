<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trytbl;

class trycontroller extends Controller
{
    public function trycode(Request $res)
    {
        $data=new trytbl;
        $data->name=$res->name;
        $data->email=$res->email;
        $data->pass=$res->pass;
        $data->save();
        // return redirect('try');
        // echo "<script>alert('data save'); window.location.href='try'</script>";
    }
    public function show()
    {
        $data= trytbl::all();
        return view('show',compact('data'));
    }
    public function delete($id)
    {
        $data= trytbl::find($id);
        $data->delete();
        return redirect('showpage');
        // echo "data deleted";
    }
}
