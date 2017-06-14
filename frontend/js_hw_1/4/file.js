var x = 1, y = 1, z, v;
z = ++x; alert(z); // 2
v = y++; alert(v); // 1

z = (2+ ++x); alert(z); // 5
v = (2+ y++); alert(v); // 4

alert(x); // 3
alert(y); // 3