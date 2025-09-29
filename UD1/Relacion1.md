# 🏎️ Ejercicios de Git – Fast & Furious Edition

Todos los comandos que necesitais los he subido al glosario, si teneis duda en alguno miradlo alli. 

## 🔹 Bloque 1: Comandos básicos

### Ejercicio 1 – El primer garaje
1. Crea una carpeta llamada `fast-furious`.  
2. Inicializa un repositorio Git dentro.  
3. Configura tu nombre y correo en Git. (Si no lo hubierais hecho antes, en el glosario está en Configuración inicial)
4. Crea un archivo `README.md` con el título:  
   ```
   Proyecto Fast & Furious
   ```  
   y tu nombre como autor.  
5. Haz un commit inicial con el mensaje: `"Commit inicial con README"`.  
6. Comprueba el historial con `git log`.

---

### Ejercicio 2 – Fichando personajes
1. Crea un archivo `personajes.txt` y añade los nombres de 3 personajes (ej: Dom, Brian, Letty).  
2. Añade el archivo al staging y haz un commit con mensaje: `"Añadido archivo de personajes"`.  
3. Modifica `personajes.txt` añadiendo 2 personajes más.  
4. Haz otro commit con el mensaje `"Actualización de personajes"`.  
5. Usa `git log` y `git diff` para comprobar los cambios.

---

## 🔹 Bloque 2: Ramas y Merge

### Ejercicio 3 – Los coches de la saga
1. Crea una nueva rama llamada `feature-coches`.  
2. Dentro de esa rama, crea un archivo `coches.txt` con 3 coches famosos de la saga.  
3. Haz un commit en esa rama con el mensaje `"Archivo de coches"`.  
4. Cambia a la rama `main` y comprueba que `coches.txt` **no está**.  
5. Vuelve a `feature-coches` y comprueba que sí aparece.  

---

### Ejercicio 4 – Misión en equipo
1. Sitúate en la rama `main`.  
2. Haz un merge de la rama `feature-coches`.  
3. Comprueba que `coches.txt` ahora también está en `main`.  
4. Crea otra rama llamada `feature-misiones` y dentro de ella un archivo `misiones.txt` con 3 misiones posibles (ej: Carreras ilegales en Miami, Robo de coches blindados, Salto con paracaídas de un avión).  
5. Haz un commit y vuelve a `main`.  
6. Haz un merge de `feature-misiones`.  

---

### Ejercicio 5 – Conflictos de guion
1. En la rama `main`, abre `personajes.txt` y añade la frase:  
   ```
   Fast & Furious es sobre la familia.
   ```  
   Haz commit.  
2. Crea una rama `feature-guion`.  
3. En esa rama, abre `personajes.txt` y cambia la misma línea por:  
   ```
   Fast & Furious es sobre coches y acción.
   ```  
   Haz commit.  
4. Vuelve a `main` e intenta hacer merge de `feature-guion`.  
5. Resuelve el conflicto de forma que el archivo combine ambas frases.  
6. Haz commit de la resolución.  

---

## 🔹 Bloque 3: Rebase y Cherry-pick

### Ejercicio 6 – Línea temporal de películas
1. Crea una nueva rama `feature-peliculas`.  
2. Añade un archivo `peliculas.txt` con 3 títulos de la saga (ej: The Fast and the Furious, 2 Fast 2 Furious, Tokyo Drift). Haz commit.  
3. Añade otra película más y haz otro commit.  
4. Vuelve a `main` y añade un archivo `frases.txt` con una frase famosa:  
   ```
   I live my life a quarter mile at a time.
   ```  
   Haz commit.  
5. Sitúate en `feature-peliculas` y haz un rebase sobre `main`.  
6. Comprueba el historial con:  
   ```bash
   git log --oneline --graph
   ```  

   --oneline → resume cada commit en una sola línea:  aparece el hash corto (ej: a1b2c3d)seguido del mensaje del commit.
   --graph → dibuja un esquema gráfico con ramas usando caracteres ASCII a la izquierda (|, \, /).
   y observa cómo los commits se han “reordenado”.

---

### Ejercicio 7 – Robando un commit
1. En la rama `main`, crea un archivo `plan.txt` con una estrategia de misión (ej: “Robo de combustible en República Dominicana”). Haz commit.  
2. Crea una rama `feature-robos` y en ella crea un archivo `robos.txt` con una lista de 3 robos. Haz commit.  
3. Vuelve a `main` y crea un archivo `aliados.txt` con los nombres de 2 personajes secundarios. Haz commit.  
4. Usa `git log` para ver el hash del commit en `feature-robos`.  
5. Haz un cherry-pick de ese commit en `main`.  
6. Comprueba que `robos.txt` se ha añadido en `main` aunque no hiciste un merge completo de la rama.  

