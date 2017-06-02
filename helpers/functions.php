<?php

use App\Application;

function validateCnp($cnp)
{
    if (strlen($cnp)) {
        if (strlen($cnp) !== 13) {
            return false;
        } else {
            $cnp_v = str_split((int) $cnp);
            $suma = $cnp_v[0]*2+$cnp_v[1]*7+$cnp_v[2]*9+$cnp_v[3]*1+$cnp_v[4]*4+$cnp_v[5]*6
                    +$cnp_v[6]*3+$cnp_v[7]*5+$cnp_v[8]*8+$cnp_v[9]*2+$cnp_v[10]*7+$cnp_v[11]*9;
            if ($suma % 11 < 11) {
                if ($suma%11 < 10 && $suma%11 == $cnp_v[12]) {
                    return true;
                } elseif ($suma % 11 == 10 && $cnp_v[12] == 1) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    } else {
        return false;
    }
}
function validateCif($cif)
{
    $cif = (int) $cif;
    if (strlen($cif) === 0) {
        return false;
    } elseif (( $cif % 1 ) !== 0) {
        return false;
    } elseif (strlen($cif) > 10 || strlen($cif) < 6) {
        return false;
    } else {
        // numarul de control
        $v = 753217532;

        // extrage cifra de control
        $c1 = $cif % 10;
        $cif = (int)( $cif / 10 );

        // executa operatiile pe cifre
        $t = 0;
        while ($cif > 0) {
            $t += ( $cif % 10 ) * ( $v % 10 );
            $cif = (int)( $cif / 10 );
            $v = (int)( $v / 10 );
        }

        // aplica inmultirea cu 10 si afla modulo 11
        $c2 = (int)($t * 10 % 11);

        // daca modulo 11 este 10, atunci cifra de control este 0
        if ($c2 == 10) {
                $c2 = 0;
        }
        if ($c1 !== $c2) {
            return false;
        } else {
            return true;
        }
    }
}

function getAppsRoutes()
{
    $routes = Application::all();
    return $routes;
}
