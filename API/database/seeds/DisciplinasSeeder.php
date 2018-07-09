<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;

use App\Disciplina;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            Disciplina::query()->delete(); // Apaga os registros já existentes
            Disciplina::create([
                "codigo" => "INF110",
                "nome" => "Programação I",
                "semestre" => 1,
                "departamento" => "DPI"
            ]);
            Disciplina::create([
                "codigo" => "INF112",
                "nome" => "Programação II",
                "semestre" => 2,
                "departamento" => "DPI"
            ]);
            Disciplina::create([
                "codigo" => "INF213",
                "nome" => "Estruturas de Dados",
                "semestre" => 1,
                "departamento" => "DPI"
            ]);
            Disciplina::create([
                "codigo" => "MAT140",
                "nome" => "Cálculo I",
                "semestre" => 1,
                "departamento" => "DMA"
            ]);
            Disciplina::create([
                "codigo" => "MAT147",
                "nome" => "Cálculo II",
                "semestre" => 1,
                "departamento" => "DMA"
            ]);
            Disciplina::create([
                "codigo" => "MAT241",
                "nome" => "Cálculo III",
                "semestre" => 1,
                "departamento" => "DMA"
            ]);
            Disciplina::create([
                "codigo" => "FIS201",
                "nome" => "Física I",
                "semestre" => 1,
                "departamento" => "DFI"
            ]);
            Disciplina::create([
                "codigo" => "MAT135",
                "nome" => "Geometria Analítica e Álgebra Linear",
                "semestre" => 1,
                "departamento" => "DMA"
            ]);
        }
        catch(QueryException $error){
            echo $error;
        }
    }
}
