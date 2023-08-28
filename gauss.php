<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="data">
            <h4>Hitung matrix gauss</h4>
            <form action="" method="post" id="form">
                <div>
                    <input type="text" name="" id="equ1" value="30+25+6" placeholder="Persamaan 1" class="input" disabled>
                    <span> = </span><input type="text" name="" id="result1" class="minInput" placeholder="Masukkan jumlah bahan">
                </div>
                <div>
                    <input type="text" name="" id="equ2" value="13+2+6" placeholder="Persamaan 2" class="input" disabled>
                    <span> = </span><input type="text" name="" id="result2" class="minInput" placeholder="Masukkan jumlah bahan">
                </div>
                <div>

                    <input type="text" name="" id="equ3" value="16+23+30" placeholder="Persamaan 3" class="input" disabled>
                    <span> = </span><input type="text" name="" id="result3" class="minInput" placeholder="Masukkan jumlah bahan">
                </div>

                <p></p>
                <input type="button" value="Hitung" id="btn" class="btn">
            </form>
            <p></p>
        </div>
        <div class="matrix">
        </div>
        
    </section>
    </div>

    <script>
        const regex = /[-]?[0-9]+/gi,
            input1 = document.querySelector("#equ1"),
            input2 = document.querySelector("#equ2"),
            input3 = document.querySelector("#equ3"),
            divmatrix = document.querySelector(".matrix"),
            result1 = document.querySelector("#result1"),
            result2 = document.querySelector("#result2"),
            result3 = document.querySelector("#result3"),
            btn = document.querySelector("#btn"),
            drawMatrix = e => {
                const t = `\n<table>\n    
                <tr>\n        
                <td>${e[0][0]}</td>\n        
                <td>${e[0][1]}</td>\n        
                <td class="td-f">${e[0][2]}</td>\n        
                <td>${e[0][3]}</td>\n    
                </tr>\n    
                <tr>\n        
                <td>${e[1][0]}</td>\n        
                <td>${e[1][1]}</td>\n        
                <td class="td-f">${e[1][2]}</td>\n        
                <td>${e[1][3]}</td>\n    
                </tr>\n    
                <tr>\n        
                <td>${e[2][0]}</td>\n        
                <td>${e[2][1]}</td>\n        
                <td class="td-f">${e[2][2]}</td>\n        
                <td>${e[2][3]}</td>\n    
                </tr>\n    
                </table>`,
                    r = document.createElement("div");
                return r.innerHTML = t, divmatrix.append(r.firstElementChild), r.firstElementChild
            },
            operation = (e, t, r) => {
                let n = [];
                for (let o = 0; o < 4; o++) n.push(t[o] - r * e[o]);
                return n
            },
            setZeros = e => {
                let t = e;
                if (0 != e[1][0])
                    for (let r = 0; r < 4; r++) t[1] = operation(e[0], e[1], e[1][0]);
                if (0 != e[2][0])
                    for (let r = 0; r < 4; r++) t[2] = operation(e[0], e[2], e[2][0]);
                if (1 === e[1][1] && 0 != e[0][1])
                    for (let r = 0; r < 4; r++) t[0] = operation(e[1], e[0], e[0][1]);
                if (1 === e[1][1] && 0 != e[2][1])
                    for (let r = 0; r < 4; r++) t[2] = operation(e[1], e[2], e[2][1]);
                if (1 === e[2][2] && 0 != e[0][2])
                    for (let r = 0; r < 4; r++) t[0] = operation(e[2], e[0], e[0][2]);
                if (1 === e[2][2] && 0 != e[1][2])
                    for (let r = 0; r < 4; r++) t[1] = operation(e[2], e[1], e[1][2]);
                return t
            },
            convertReal = e => {
                let t = [];
                return e.forEach((e => {
                    t.push(Number(e))
                })), t
            },
            gaussJordan = e => {
                let t = [...e],
                    r = 1 !== e[0][0] && e[0][0];
                if (r) {
                    for (let n = 0; n < 4; n++) t[0][n] = e[0][n] / r;
                    t = setZeros(t)
                } else t = setZeros(t);
                if (0 === t[1][0] && 0 === t[2][0]) {
                    let e = 1 !== t[1][1] && t[1][1];
                    if (e) {
                        for (let r = 0; r < 4; r++) t[1][r] = t[1][r] / e;
                        t = setZeros(t)
                    } else t = setZeros(t)
                }
                if (0 === t[0][1] && 0 === t[2][1]) {
                    let e = 1 !== t[2][2] && t[2][2];
                    if (e) {
                        for (let r = 0; r < 4; r++) t[2][r] = t[2][r] / e;
                        t = setZeros(t)
                    } else t = setZeros(t)
                } else setZeros(t);
                for (let e = 0; e < 3; e++)
                    for (let r = 0; r < 4; r++) "-0" === t[e][r].toLocaleString("es") && (t[e][r] = 0);
                return t
            };
        btn.addEventListener("click", (() => {
            try {
                divmatrix.innerHTML = "";
                let e = input1.value.match(regex);
                e.push(result1.value);
                let t = input2.value.match(regex);
                t.push(result2.value);
                let r = input3.value.match(regex);
                r.push(result3.value);
                let n = [convertReal(e), convertReal(t), convertReal(r)];
                drawMatrix(n), drawMatrix(gaussJordan(n))
            } catch (e) {
                alert("Mohon baca kembali data yang dimasukkan.")
            }
        }));
    </script>
</body>

</html>