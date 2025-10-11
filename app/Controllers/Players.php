<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlayerModel;

class Players extends BaseController
{
    protected $playerModel;

    public function __construct()
    {
        $this->playerModel = new PlayerModel();
    }

    public function index()
    {
        $data['players'] = $this->playerModel->findAll();
        echo view('players/index', $data);
    }

    public function new()
    {
        echo view('players/new');
    }

    public function create()
    {
        $post = $this->request->getPost();
        $this->playerModel->insert($post);
        return redirect()->to('/players');
    }

    public function edit($id = null)
    {
        $data['player'] = $this->playerModel->find($id);
        echo view('players/edit', $data);
    }

    public function update($id = null)
    {
        $post = $this->request->getPost();
        $this->playerModel->update($id, $post);
        return redirect()->to('/players');
    }

    public function show($id = null)
    {
        $data['player'] = $this->playerModel->find($id);
        echo view('players/show', $data);
    }

    public function delete($id = null)
    {
        $this->playerModel->delete($id);
        return redirect()->to('/players');
    }
}
