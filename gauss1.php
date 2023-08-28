<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" id="form">
        <div>
            <input type="text" name="" id="a11" value="30" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="a12" value="28" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="a13" value="33" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="b1" value="" placeholder=" 1" class="input">
        </div>
        <div>
            <input type="text" name="" id="a21" value="66" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="a22" value="5" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="a23" value="13" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="b2" value="" placeholder=" 1" class="input" >
        </div>
        <div>
            <input type="text" name="" id="a31" value="5" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="a32" value="6" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="a33" value="4" placeholder="Persamaan 1" class="input" disabled>
            <input type="text" name="" id="b3" value="" placeholder=" 1" class="input" >
        </div>

        <p></p>
        <input type="button" value="Hitung" id="btn" class="btn" onclick="hasil()">
    </form>
    <table border="2">
        <tr>
        <td>Matrix</td>
        <td>Hasil perhitungan</td>
        <td>hasil</td>
        </tr>
        <tr>
            <td id="hasil"></td>
            <td id="hasil1"></td>
            
        </tr>
        <tr>
        <td id="hasil2"></td>
        <td id="hasil3"></td>
        <td id="hasil4"></td>
        <td id="hasil5"></td>
        <td id="hasil6"></td>
        <td id="hasil7"></td>
        <td id="hasil8"></td>
        <td id="hasil9"></td>
        <td id="hasil10"></td>
        <td id="hasil11"></td>
        <td id="hasil12"></td>
        <td id="hasil13"></td>
        </tr>

    </table>

    <script>
        function hasil() {
            var tamp = document.getElementById("hasil");
            var tamp1 = document.getElementById("hasil1");
            var tamp2 = document.getElementById("hasil2");
            var tamp3 = document.getElementById("hasil3");
            var tamp4 = document.getElementById("hasil4");
            var tamp5 = document.getElementById("hasil5");
            var tamp6 = document.getElementById("hasil6");
            var tamp7 = document.getElementById("hasil7");
            var tamp8 = document.getElementById("hasil8");
            var tamp9 = document.getElementById("hasil9");
            var tamp10 = document.getElementById("hasil10");
            var tamp11 = document.getElementById("hasil11");
            var tamp12 = document.getElementById("hasil12");
            var tamp13 = document.getElementById("hasil13");
            var a11 = parseFloat(document.getElementById("a11").value);
            var a12 = parseFloat(document.getElementById("a12").value);
            var a13 = parseFloat(document.getElementById("a13").value);
            var a21 = parseFloat(document.getElementById("a21").value);
            var a22 = parseFloat(document.getElementById("a22").value);
            var a23 = parseFloat(document.getElementById("a23").value);
            var a31 = parseFloat(document.getElementById("a31").value);
            var a32 = parseFloat(document.getElementById("a32").value);
            var a33 = parseFloat(document.getElementById("a33").value);
            var b1 = parseFloat(document.getElementById("b1").value);
            var b2 = parseFloat(document.getElementById("b2").value);
            var b3 = parseFloat(document.getElementById("b3").value);

            function print(M, msg) {
                console.log("" + msg + "")
                for (var k = 0; k < M.length; ++k) {
                    console.log(M[k]);
                }
                console.log()
            }

            function diagonalize(M) {
                var m = M.length;
                var n = M[0].length;
                for (var k = 0; k < Math.min(m, n); ++k) {
                    // Find the k-th pivot
                    i_max = findPivot(M, k);
                    if (A[i_max, k] == 0)
                        throw "matrix is singular";
                    swap_rows(M, k, i_max);
                    // Do for all rows below pivot
                    for (var i = k + 1; i < m; ++i) {
                        // Do for all remaining elements in current row:
                        var c = A[i][k] / A[k][k];
                        for (var j = k + 1; j < n; ++j) {
                            A[i][j] = A[i][j] - A[k][j] * c;
                        }
                        // Fill lower triangular matrix with zeros
                        A[i][k] = 0;
                    }
                }
            }

            function findPivot(M, k) {
                var i_max = k;
                for (var i = k + 1; i < M.length; ++i) {
                    if (Math.abs(M[i][k]) > Math.abs(M[i_max][k])) {
                        i_max = i;
                    }
                }
                return i_max;
            }

            function swap_rows(M, i_max, k) {
                if (i_max != k) {
                    var temp = A[i_max];
                    A[i_max] = A[k];
                    A[k] = temp;
                }
            }

            function makeM(A, b) {
                for (var i = 0; i < A.length; ++i) {
                    A[i].push(b[i]);
                }
            }

            function substitute(M) {
                var m = M.length;
                for (var i = m - 1; i >= 0; --i) {
                    var x = M[i][m] / M[i][i];
                    for (var j = i - 1; j >= 0; --j) {
                        M[j][m] -= x * M[j][i];
                        M[j][i] = 0;
                    }
                    M[i][m] = x;
                    M[i][i] = 1;
                }
            }

            function extractX(M) {
                var x = [];
                var m = A.length;
                var n = A[0].length;
                for (var i = 0; i < m; ++i) {
                    x.push(A[i][n - 1]);
                }
                return x;
            }

            function solve(A, b) {
                //print(A, "A");
                makeM(A, b);
                //print(A, "M");
                diagonalize(A);
                //print(A, "diag");
                substitute(A);
                //print(A, "subst");
                var x = extractX(A);
                //print(x, "x");
                return x;
            }

            A = [
                [a11, a12, a13],
                [a21, a22, a23],
                [a31, a32, a33]
            ]

            b = [b1,
                b2,
                b3
            ]
            print(A, " A ");
            print(b, " b ");

            var x = solve(A, b);

            document.getElementById("hasil13").innerHTML = x;

            var el = [
                a11
            ]
            document.getElementById("hasil").innerHTML = el;
            var el1 = [
                a12
            ]
            document.getElementById("hasil3").innerHTML = el3;
            var el2 = [
                a13
            ]
            document.getElementById("hasil2").innerHTML = el2;
            var el3 = [
                a21
            ]
            document.getElementById("hasil3").innerHTML = el3;
            var el4 = [
                a22
            ]
            document.getElementById("hasil4").innerHTML = el4;
            var el5 = [
                a23
            ]
            document.getElementById("hasil5").innerHTML = el5;
            var el6 = [
                a31
            ]
            document.getElementById("hasil6").innerHTML = el6;
            var el7 = [
                a32
            ]
            document.getElementById("hasil7").innerHTML = el7;
            var el8 = [
                a33
            ]
            document.getElementById("hasil8").innerHTML = el8;
            var el9 = [
                b1
            ]
            document.getElementById("hasil9").innerHTML = el9;
            var el10 = [
                b2
            ]
            document.getElementById("hasil10").innerHTML = el10;
            var el11 = [
                b3
            ]
            document.getElementById("hasil11").innerHTML = el11; 
                        
        }
    </script>
</body>

</html>