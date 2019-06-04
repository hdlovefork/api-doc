<?php
/**
 * Created by PhpStorm.
 * User: Dean
 * Email: 1602264241@qq.com
 * Date: 2019-06-04
 * Time: 08:35
 */

namespace Dean\ApiDoc\Controllers;


use Illuminate\Routing\Controller;
use Parsedown;

class DocController extends Controller
{
    public function index($name='index')
    {
        // 仅开发环境可以访问
        if (!app()->environment('local', 'dev')) {
            return ['blank'];
        }
        
        $doc    = storage_path('doc/');
        $config = file_get_contents($doc . 'config.json');
        $config = json_decode($config, true);
        
        if ($name === 'index') {
            $docPath = $doc . 'readme.md';
        } else {
            $name    = urldecode($name);
            $name    = str_replace('-', '/', $name);
            $docPath = $doc . $name;
        }
        
        $parseDown = new Parsedown();
        $html      = $parseDown->text(file_get_contents($docPath));
        
        return view('dean::document')
            ->with('doc', $doc)
            ->with('html', $html)
            ->with('config', $config);
    }
}