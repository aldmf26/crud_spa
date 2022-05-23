<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class ModalTambah extends Component
{
    public $title;
    public $content;
    public function render()
    {
        return view('livewire.modal-tambah');
    }
    public function store()
    {
        $this->validate([
            'title'   => 'min:1',
            'content' => 'required|min:1',
        ]);

        $post = Post::create([
            'title'     => $this->title,
            'content'   => $this->content
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('post.index');

    }
}
