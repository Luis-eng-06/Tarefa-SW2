<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livro::create([
            'titulo' => 'O príncipe',
            'autor' => 'Nicoulau Maquiavel',
            'ano publicacao' => '1532',
            'resumo' => 'Livro de filosofia e crítica política',
        ]);

        Livro::create([
            'titulo' => 'O anticristo',
            'autor' => 'Friedrich Nietzche',
            'ano publicacao' => '1895',
            'resumo' => 'Livro de filosofia e crítica religiosa',
        ]);

        Livro::create([
            'titulo' => 'Harry Potter',
            'autor' => 'J.K Rowling',
            'ano publicacao' => '1998',
            'resumo' => 'Livro de fantasia',
        ]);

        Livro::create([
            'titulo' => 'Crítica da Razão Pura',
            'autor' => 'Immanuel Kant',
            'ano publicacao' => '1781',
            'resumo' => 'Livro de filosofia',
        ]);

        Livro::create([
            'titulo' => 'O discurso do método',
            'autor' => 'René Descartes',
            'ano publicacao' => '1637',
            'resumo' => 'Livro de filosofia',
        ]);
    }
}
