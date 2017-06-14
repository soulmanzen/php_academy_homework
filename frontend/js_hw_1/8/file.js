x = "" + 1 + 0; // 10
x = "" - 1 + 0; // -1
x = true + false; // 1
x = 6 / "3"; // 2
x = "2" * "3"; // 6
x = 4 + 5 + "px"; // 9px
x = "$" + 4 + 5; // $45
x = "4" - 2; // 2
x = "4px" - 2; // NaN
x = 7 / 0; // Infinity
x = "   -9\n" + 5; //    -9
                   // 5
x = "   -9\n" - 5; // -14
x = 5 && 2; // 2
x = 2 && 5; // 5
x = 5 || 0; // 5
x = 0 || 5; // 5
x = null + 1; // 1
x = undefined + 1; // NaN
x = null == "\n0\n"; // false
x = +null == +"\n0\n"; // true

alert(x);