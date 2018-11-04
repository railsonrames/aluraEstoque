<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AsJanelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('janelas')->insert([
            'nome' => 'Geladeira Brastemp Inverse 573 litros',
            'valor' => '3.898,99',
            'descricao' => 'A Geladeira Brastemp Inverse Maxi com capacidade para 573 litros tem design inovador e funcional. Com refrigerador na parte de cima e freezer embaixo.',
            'quantidade' => 320,
            'created_at' => Carbon::now()
        ]);
        DB::table('janelas')->insert([
            'nome' => 'Smart TV LED 43" Ultra HD 4K LG 43UK6520PSA',
            'valor' => '1.984,55',
            'descricao' => 'Com a Smart TV LG 43UK6520PSA você terá muito mais praticidade na hora de assistir TV, busque seus conteúdos e informações através de comandos de voz, a tecnologia LG Inteligência Artificial ThinQ AI.',
            'quantidade' => 64,
            'created_at' => Carbon::now()
        ]);
        DB::table('janelas')->insert([
            'nome' => 'Fogão 4 bocas de piso com Time Touch Consul CFO4VAT',
            'valor' => '1.259,00',
            'descricao' => 'O fogão Consul vai deixar sua cozinha ainda mais moderna, além de trazer mais praticidade no seu dia a dia.',
            'quantidade' => 811,
            'created_at' => Carbon::now()
        ]);
        DB::table('janelas')->insert([
            'nome' => 'Computador Quad Core Com Monitor Led 19.5 E Placa Geforce 4gb 500gb Saída Hdmi Serial USB 3.0 Easypc',
            'valor' => '1.219,99',
            'descricao' => 'Se você quiser aprimorar fotos, editar vídeos, assistir a filmes, jogar ou simplesmente deseja uma experiência completa, a placa gráfica Nvidia GeForce GT210 traz um incrível poder de processamento gráfico para seu Pc.',
            'quantidade' => 17,
            'created_at' => Carbon::now()
        ]);
        DB::table('janelas')->insert([
            'nome' => 'Cama Casal Multifuncional Madeira Maciça 6 Gavetas Charme Inter Link Branco Lavado',
            'valor' => '1.409,90',
            'descricao' => 'Praticidade e organização no seu quarto não será mais um problema, ainda mais quando não há muito espaço disponível. A Cama de Casal Charme é multifuncional e oferece todas as soluções em um único produto.',
            'quantidade' => 6,
            'created_at' => Carbon::now()
        ]);
        DB::table('janelas')->insert([
            'nome' => 'Sofá Retrátil E Reclinável c/ Baú 3 Lugares Arezzo – AMZ',
            'valor' => '1.614,05',
            'descricao' => 'O Sofá garante todo o conforto necessário para que você possa descansar. Reclinável e retrátil, ele é tudo o que você precisa. Sua sala ficará aconchegante e muito bonita.',
            'quantidade' => 55,
            'created_at' => Carbon::now()
        ]);
    }
}
