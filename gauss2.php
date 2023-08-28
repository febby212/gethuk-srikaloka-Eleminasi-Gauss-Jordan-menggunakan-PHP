<form>
  <input type="text" id="a11" size="1">
  <input type="text" id="a12" size="1">
  <input type="text" id="a13" size="1">
  <input type="text" id="a14" size="1">
  <br>
  <input type="text" id="a21" size="1">
  <input type="text" id="a22" size="1">
  <input type="text" id="a23" size="1">
  <input type="text" id="a24" size="1">
  <br>
  <input type="text" id="a31" size="1">
  <input type="text" id="a32" size="1">
  <input type="text" id="a33" size="1">
  <input type="text" id="a34" size="1">
  <br>
  <input type="button" value="Calculate" onclick="gaussJordan()">
</form>

<script>
  function gaussJordan() {
    var a = [[], [], []];
    a[0][0] = parseFloat(document.getElementById("a11").value);
    a[0][1] = parseFloat(document.getElementById("a12").value);
    a[0][2] = parseFloat(document.getElementById("a13").value);
    a[0][3] = parseFloat(document.getElementById("a14").value);
    a[1][0] = parseFloat(document.getElementById("a21").value);
    a[1][1] = parseFloat(document.getElementById("a22").value);
    a[1][2] = parseFloat(document.getElementById("a23").value);
    a[1][3] = parseFloat(document.getElementById("a24").value);
    a[2][0] = parseFloat(document.getElementById("a31").value);
    a[2][1] = parseFloat(document.getElementById("a32").value);
    a[2][2] = parseFloat(document.getElementById("a33").value);
    a[2][3] = parseFloat(document.getElementById("a34").value);

    for (var i = 0; i < 3; i++) {
      var pivot = a[i][i];
      for (var j = 0; j < 4; j++) {
        a[i][j] = a[i][j] / pivot;
      }
      for (var k = 0; k < 3; k++) {
        if (k != i) {
          var factor = a[k][i];
          for (var l = 0; l < 4; l++) {
            a[k][l] = a[k][l] - factor * a[i][l];
          }
        }
      }
    }

    console.log(a);
  }
</script>
