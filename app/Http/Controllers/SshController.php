<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ssh;
use phpseclib\Net\SSH2;

class SshController extends Controller
{
    public function index(Request $request)
    {
        dd($request);

        $server = [
            'host' => 'shemoud.com',
            'username' => 'shemoud',
            'password' => 'M!@#$%^S123'
        ];
        $ssh = Ssh::create($server['shemoud.com'], $server['shemoud'])
            ->usePassword($server['M!@#$%^S123']);
        $output = $ssh->execute('ls -la');
        dd($output);

//        $ssh = new Ssh();
//        // Execute a remote command
//        $ssh->enablePasswordAuthentication();
//
//        $ssh->execute('ls -al');
//        $ssh = Ssh::create('shemoud','shemoud.com',80,'M!@#$%^S123')
//            ->enablePasswordAuthentication()
//            ->execute(['ls -la']);
//
//        $ssh = new SSH2('shemoud.com');
//        if (!$ssh->login('shemoud', 'M!@#$%^S123')) {
//            exit('Login Failed');
//        }
//        return view('ssh.index',compact('ssh','output'));
//
    }
}
