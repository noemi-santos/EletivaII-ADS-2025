<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{
    public function teste(){
        return "Teste em Laravel";
    }

    public function abrirForm(){
        return view("exercicio1");
    }

    public function resposta(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return "Soma: ".$soma;
    }

    public function exercicio2(){
        return view("exercicio2");
    }

    public function respExercicio2(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $subtração = $valor1 - $valor2;
        return "Subtração: ".$subtração;
    }

    public function exercicio3(){
        return view("exercicio3");
    }

    public function respExercicio3(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $multi = $valor1 * $valor2;
        return "Multiplicação: ".$multi;
    }
        
    public function exercicio4(){
        return view("exercicio4");
    }

    public function respExercicio4(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        if ($valor2 == 0)
            return "O divisor não pode ser zero";
        else
            $div = $valor1 / $valor2;
            return "Divisão: ".$div;
    }

    public function exercicio5(){
        return view("exercicio5");
    }

    public function respExercicio5(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;
        $med = ($valor1 + $valor2 + $valor3) / 3;
        return "Média das notas: ".$med;
    }

    public function exercicio6(){
        return view("exercicio6");
    }

    public function respExercicio6(Request $request){
        $valor1 = $request->valor1;
        $fah = ($valor1 * 9/5) + 32;
        return "A temperatura em Fahrenheit é: ".$fah;
    }

    public function exercicio7(){
        return view("exercicio7");
    }

    public function respExercicio7(Request $request){
        $valor1 = $request->valor1;
        $cel = ($valor1 - 32) * 5 / 9;
        return "A temperatura em Celsius é: ".$cel;
    }

    public function exercicio8(){
        return view("exercicio8");
    }

    public function respExercicio8(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $area = $valor1 * $valor2;
        return "A área do retângulo é: ".$area;
    }

    public function exercicio9(){
        return view("exercicio9");
    }

    public function respExercicio9(Request $request){
        $valor1 = $request->valor1;
        $area = pi() * pow($valor1, 2);
        return "A área do círculo é: ".$area;
    }

    public function exercicio10(){
        return view("exercicio10");
    }

    public function respExercicio10(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $peri = 2 * ($valor1 + $valor2);
        return "O perímetro do retângulo é: ".$peri;
    }

    public function exercicio11(){
        return view("exercicio11");
    }

    public function respExercicio11(Request $request){
        $valor1 = $request->valor1;
        $peri =  2 * pi() * $valor1;
        return "O perímetro do círculo é: ".$peri;
    }

    public function exercicio12(){
        return view("exercicio12");
    }

    public function respExercicio12(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resul = pow($valor1,$valor2);
        return "Resutltando da equação: ".$resul;
    }

    public function exercicio13(){
        return view("exercicio13");
    }

    public function respExercicio13(Request $request){
        $valor1 = $request->valor1;
        $cen =  100 * $valor1;
        return "O valor em centímentos é: ".$cen;
    }

    public function exercicio14(){
        return view("exercicio14");
    }

    public function respExercicio14(Request $request){
        $valor1 = $request->valor1;
        $milhas =  0.621371 * $valor1;
        return "O valor em milhas é: ".$milhas;
    }

    public function exercicio15(){
        return view("exercicio15");
    }

    public function respExercicio15(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $imc = $valor1 / pow($valor2, 2);
        return "IMC: ".$imc;
    }

    public function exercicio16(){
        return view("exercicio16");
    }

    public function respExercicio16(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $preco = $valor1 - ($valor1 * ($valor2/100));
        return "O preço final com desconto é: ".$preco;
    }

    public function exercicio17(){
        return view("exercicio17");
    }

    public function respExercicio17(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;
        $js = ($valor1 * ($valor2/100) * $valor3);
        return "Juros simples: ".$js;
    }

    public function exercicio18(){
        return view("exercicio18");
    }

    public function respExercicio18(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;
        $jc = $valor1 * pow((1+($valor2/100)),$valor3);
        return "Montante com juros compostos: ".$jc;
    }

    public function exercicio19(){
        return view("exercicio19");
    }

    public function respExercicio19(Request $request){
        $valor1 = $request->valor1;
        $hrs =  24 * $valor1;
        $min = 60 * $hrs;
        $seg = 60 * $min;
        return "A quantidade de dias inserido tem: ". $hrs. " horas / " .$min. " minutos / " .$seg. " segundos. ";
    }

    public function exercicio20(){
        return view("exercicio20");
    }

    public function respExercicio20(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $vm = $valor1 / $valor2;
        return "A velocidade média é: ".$vm. " km/h";
    }

}

