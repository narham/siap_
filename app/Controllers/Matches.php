<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MatchModel;

class Matches extends BaseController
{
    protected $matchModel;

    public function __construct()
    {
        $this->matchModel = new MatchModel();
    }

    public function index()
    {
        $data['matches'] = $this->matchModel->findAll();
        echo view('matches/index', $data);
    }

    public function new()
    {
        echo view('matches/new');
    }

    public function create()
    {
        $post = $this->request->getPost();
        $this->matchModel->insert($post);
        return redirect()->to('/matches');
    }

    public function edit($id = null)
    {
        $data['match'] = $this->matchModel->find($id);
        echo view('matches/edit', $data);
    }

    public function update($id = null)
    {
        $post = $this->request->getPost();
        $this->matchModel->update($id, $post);
        return redirect()->to('/matches');
    }

    public function show($id = null)
    {
        $data['match'] = $this->matchModel->find($id);
        echo view('matches/show', $data);
    }

    public function delete($id = null)
    {
        $this->matchModel->delete($id);
        return redirect()->to('/matches');
    }
}
