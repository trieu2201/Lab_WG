var a = [5, 25, 13, 8, 45, 6, 11];
var a1 = [...a];
var a2 = a.slice();

var max = a[0];
var min = a[0];

for (i = 1; i < a.length; i++) {
  if (a[i] > max) max = a[i];
}

for (i = 1; i < a.length; i++) {
  if (a[i] < min) min = a[i];
}

for (j = 1; j < a1.length; j++) {
  for (h = 0; h < j; h++) {
    if (a1[j] < a1[h]) {
      var x1 = a1[j];
      a1[j] = a1[h];
      a1[h] = x1;
    }
  }
}

for (j = 1; j < a2.length; j++) {
  for (h = 0; h < j; h++) {
    if (a2[j] > a2[h]) {
      var x = a2[j];
      a2[j] = a2[h];
      a2[h] = x;
    }
  }
}
