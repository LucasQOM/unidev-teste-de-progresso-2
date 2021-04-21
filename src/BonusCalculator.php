<?php

namespace App;

use Exception;

class BonusCalculator
{
    /**
     * Instruções:
     * 
     * - O bônus é calculado em cima do valor do salário do funcionário
     * - Para cada filho o funcionário tem seu bônus acrescido em 10% do seu salário
     * - Se o funcionário tiver mais de 3 filhos, o acrescimo de bônus deve ser aplicado apenas a 3 filhos.
     * - Funcionários com salário igual ou superior a R$ 10.000 não podem receber bônus
     * - Funcionários com salário de até R$ 2.000 devem receber 20% de bônus
     * - Funcionários com salário acima de 2.000 e abaixo de R$ 5.000 devem receber bônus de 10%
     * - Funcionários com salário acima de 5.000 e abaixo de R$ 10.000 devem receber bônus de 5%
     */

    /**
     * Deve retornar um valor numérico com o total de Bonus do funcionário
     */

    public static function calculate($salary, $totalChildren)
    {
        $bonus = 0;

        if(!is_numeric($salary) || !is_numeric($totalChildren) || $salary < 0 || $totalChildren < 0) {
            throw new Exception('Apenas valores numéricos são aceitos!');
        }
        if($salary >= 10000){
            $bonus = 0;
        }else{
            if($totalChildren == 0){
                $bonus += 0;
            }else{
                if($totalChildren > 0){
                    if($totalChildren == 1){
                        $bonus += 0.1;
                    }
                    if($totalChildren == 2){
                        $bonus += 0.2;
                    }
                    if($totalChildren >= 3){
                        $bonus += 0.3;
                    }
                }
            }
            if($salary > 0 && $salary <= 2000){
                    $bonus += 0.2;
            }
            else{
                if($salary > 2000 && $salary <= 5000){
                    $bonus += 0.1;
            }
            else{
                if($salary > 5000 && $salary < 10000){
                    $bonus +=0.05;
                    }
                }
            }
        }
    $salary *= $bonus;
    return $salary;
    }
}