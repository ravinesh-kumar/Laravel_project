<?php

namespace App\Http\Controllers;

use App\Models\filetbl;
use Illuminate\Http\Request;
use App\Models\formtbl;


class formcontroller extends Controller
{
    public function formcode(Request $res)
    {
        $data = new formtbl;
        $data->name = $res->name;
        $data->mobile = $res->mob;
        $data->save();
        return redirect('form');
        // echo "data saved";

        // $a=$res->name;
        // echo $a;


    }
    public function showf()
    {
        $data = formtbl::all();
        return view('formshow', compact('data'));
    }
    public function delete($id)
    {
        $data = formtbl::find($id);
        $data->delete();
        return redirect('formshow');
    }
    public function edit($id)
    {
        $data = formtbl::find($id);
        return view('edit', compact('data'));
    }
    public function update(Request $res)
    {
        $data = formtbl::find($res->id);
        $data->name = $res->name;
        $data->mobile = $res->mob;
        $data->save();
        return redirect('formshow');
    }
    public function filecode(Request $result)
    {
        $data = new filetbl();
        $a = $result->name;
        $b = $result->email;
        $c = $result->pass;
        $d = $result->gnd;
        $e = $result->city;
        $f = implode(',', $result->{'chk'});
        $g = $result->file("files");

        $check = filetbl::where('email', $b)
            ->orwhere('pass', $c)->first();

        if ($a == '' or $b == '' or $c == '' or $d == '' or $e == '' or $f == '' or $g == '') {
            return redirect('file');
        } else {
            if ($check->email == $b) {
                echo "email same";
            } else {
                if ($check->pass == $c) {
                    echo "password same";
                } else {
                    $data->name = $a;
                    $data->email = $b;
                    $data->pass = $c;
                    $data->gender = $d;
                    $data->city = $e;
                    $data->course = $f;
                    $data->file = $g->getClientOriginalname();
                    $path = "picture/";
                    $g->move($path, $g->getClientOriginalname());
                    $data->save();
                    // echo "data store";
                    // return redirect('file');
                    echo "<script>alert('data store'); window.location.href='file'</script>";
                }
            }
        }
    }
    public function showfile()
    {
        $data = filetbl::all();
        return view('fileshow', compact('data'));
    }
    public function fedit($id)
    {
        $data = filetbl::find($id);
        return view('fedit', compact('data'));
    }
    public function fileupdate(Request $res)
    {
        $data = filetbl::find($res->id);
        $data->name = $res->name;
        $data->email = $res->email;
        $data->pass = $res->pass;
        $data->gender = $res->gnd;
        $data->city = $res->city;
        $data->course = implode(',', $res->{'chk'});
        $a = $res->file('files');
        $data->file = $a->getClientOriginalname();
        $path = "picture/";
        if ($a->move($path, $a->getClientOriginalname())); {
            $data->save();
            return redirect('fileshow');
        }
    }

    public function searchcode(Request $res)
    {
        $a = $res->search;
        $data = filetbl::where('name', $a)
            ->orwhere('pass', $a)->first()
            ->orwhere('course', $a)->first();

        return view('search', compact('data'));
    }

    public function logincode(Request $res)
    {
        $a = $res->em;
        $b = $res->pass;
        $data = filetbl::where('email', $a)
            ->orwhere('name', $a)
            ->orwhere('pass', $b)->first();
        if ($data) {
            if ($data->email == $a or $data->name == $a) {
                if ($data->pass == $b) {
                    session()->put('user', $a);
                    return redirect('dashboard');
                } else {
                    echo "password doesn't match";
                }
            } else {
                echo "email or mobile not matched";
            }
        } else {
            echo "data not fetch";
        }
    }

    public function changecode(Request $res)
    {
        $sesid = session()->get('user');
        $a = $res->npass;
        $b = $res->cpass;
        $c = $res->opass;
        $data = filetbl::where('email', $sesid)->first();
        if ($data) {
            if ($data->pass == $c) {
                if ($a == $b) {
                    $data->pass = $b;
                    $data->save();
                    return redirect('dashboard');
                } else {
                    echo "New And Confirm Password is wrong";
                }
            } else {
                echo "Old Password is Wrong";
            }
        } else {
            echo "data not fetch";
        }
    }

    public function logout()
    {
        $sesid = session()->get('user');
        if ($sesid) {
            session()->forget('user');
            return redirect('login');
        }
    }
}
