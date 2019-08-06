#include<stdio.h>
#include<stdlib.h>
#include<time.h>


//funcion necesaria para usar delay
void delay(int number_of_seconds) 
{ 
    // Converting time into milli_seconds 
    int milli_seconds = 1000 * number_of_seconds; 
  
    // Stroing start time 
    clock_t start_time = clock(); 
  
    // looping till required time is not acheived 
    while (clock() < start_time + milli_seconds) 
        ; 
} 


//funcion principal
int main(){
		//instrucciones para ingresar datos
		printf("JUEGO DE LA VIDA\n");
		printf("Las reglas son:\n");
		printf("1) Las celulas que tengas dos o mas vecinos viven para la siguiente generacion.\n");
		printf("2) Las celulas que tengas mas de tres vecinos mueren por sobrepoblacion.\n");
		printf("3) Las celulas que tengas menos de dos vecinos mueren por baja poblacion.\n");
		printf("4) Las celulas muertas que tengas tres vecinos reviven para la siguiente genracion.\n");
		//printf("Ingresa las condiciones que se te solicitan:\n");
		//declaracion de variables:
		int g,n,m,i,j,total,alet,t;
		//parametros que elige el jugador:
		printf("Inserta el valor de filas: ");
		scanf("%d",&n);
		printf("\nInserta el valor de columnas: ");
		scanf("%d",&m);
		printf("Inserta el numero de generaciones: ");
		scanf("%d",&g);
		printf("Inserta la velocidad de reproduccion en milisegundos 1s=1000ms: ");
		scanf("%d",&t);
		//printf("\nSe genero una matriz de: %d x %d\n", n, m);
		int death='.', alive='@';
		total=n*m;
		//esta generacion es para generar un numero aleatorio menor al numero total de espacio en la matriz, alet es el numero aleatorio de celulas a poner en la matriz
		srand(time(NULL));
		alet=rand()%total;
		//se define  la matriz y se imprime la matriz con puras celulas muertas que sera la plantilla para poder asignar a las celulas vivas
		int array[n][m];
		for (i=0;i<n;i++)
		{
			for (j=0;j<m;j++){
				array[i][j]=death;
				//printf("(%c) ", array[i][j]);
				}
			printf("\n");
		}
		//para poder asignar de manera aleatoria se definen dos arreglos de coordenadas aleatorias c1=coordenada 1
		//printf("Se muestran las coordenas random de la matriz inicial %d:",alet);
		int c1[alet],c2[alet];
		//printf("\ncoordenadas 1:\n");
		for(i = 0; i<alet; i++) {
		c1[i]=rand()%n;
        //printf(" %d ", c1[i]); 
		}
		//printf("\ncoordenadas 2:\n");
		for(i = 0; i<alet; i++) {
		c2[i]=rand()%m;
        //printf(" %d ", c2[i]); 
		}
		
		//Se definen las celulas vivas por medio de los arregos c1 y c2
		for (i=0;i<alet;i++)
		{
			array[c1[i]][c2[i]]=alive;
		}
		
		
		//	Inician la reproduccion de las celulas
		// se indica el numero de generaciones a crear
	// se indica el numero de generaciones a crear(podemos poner un scanf y dejar que el usuario elija)	
	int k;	
	// Se define la matriz neibors que contendra el valor de vecinos que tiene una celula en una cordenada i,j
	int neigbors[n][m];
	//Se inicia el cilo de reproduccion 
	printf("\nloading...\n");
	sleep(3);
	system("clear");
	for (k=0;k<g;k++){
	printf("\nGENERACION #%d\n",k);
	
	//se imprime la matriz nuevamente pero ahora con los las celulas vivas
		for (i=0;i<n;i++)
		{
			//Este for me rellena los valores de las m columnas
			for (j=0;j<m;j++){
				printf("%c ", array[i][j]);
				}
			printf("\n");
		}
		
		//se inicia el conteo de vecinos en cada uno de las coordenas i,j de la matriz creada 
		for(i=0;i<n;i++){
			//printf("\nFILA %d:\n",i);	
			for(j=0;j<m;j++){
				//se definen "y" y "x" que usaremos para poder evaluar una matriz de 3x3 que representa el el valor ubicacion de la celula y sus ocho vecinos
				int y,x;
				//defino que el arreglo actual de neibors es igual a cero 
				neigbors[i][j]=0;
				// en esta condicion digo que cuando no celulas en bordes o esquinas proceda con la siguiente instruccion
				if ( (i>0 && i<(n-1)) && (j>0 && j<(m-1)) ){
					//printf("\n!!! se evalua la condicion\n");
					//se crea una matriz 3x3
					for (y=-1;y<2;y++){
						for (x=-1;x<2;x++){
							//indico que cuando la coordenada sea [x+i=i] y [y+j] iguales a cero no se haga nada
							if ( x==0 && y==0 ){
								//printf("\nno se agrega nada\n");	
								//printf("[%d][%d]=%c\n",x+i,y+j,array[x+i][y+j]);
							}
							//para todos los demas casos se evalua que si el valor de esa coordenada es @ se agrege +1 al arreglo de neigvors
							else if (array[i+x][j+y]==alive){
								//printf("\nHay vecino!\n");
								//printf("[%d][%d]=%c",x+i,y+j,array[x+i][y+j]);
								neigbors[i][j]++;
							}			
						}
					}
					
				}
			//se imponen las condiciones para la esquina sup izq:
					else if ( i==0 && j==0){
						for (y=0;y<2;y++){
						for (x=0;x<2;x++){
							if ( x==0 && y==0 ){
								//no se agrega nada
							}
							else if (array[i+x][j+y]==alive){
								neigbors[i][j]++;
							}			
						}
					}}
					
					//se imponen las condiciones para la esquina sup der:
					else if ( i==0 && j==(m-1)){
						for (y=0;y<2;y++){
						for (x=-1;x<1;x++){
							if ( x==0 && y==0 ){
								//no se agrega nada
							}
							else if (array[i+x][j+y]==alive){
								neigbors[i][j]++;
							}			
						}
					}}
					//se imponen las condiciones para la esquina inf izq:
					else if ( i==(n-1) && j==0){
						for (y=-1;y<1;y++){
						for (x=0;x<2;x++){
							if ( x==0 && y==0 ){
								//no se agrega nada
							}
							else if (array[i+x][j+y]==alive){
								neigbors[i][j]++;
							}			
						}
					}}
					//se imponen las condiciones para la esquina inf der:
					else if ( i==(n-1) && j==(m-1)){
						for (y=-1;y<1;y++){
						for (x=-1;x<1;x++){
							if ( x==0 && y==0 ){
								//no se agrega nada
							}
							else if (array[i+x][j+y]==alive){
								neigbors[i][j]++;
							}			
						}
					}}
					
					//bordes lat izq y der
					else if ( !(j>0 && j<(m-1)) && (i>0 && i<(n-1)) ){
						
						//se imponen las condiciones para el borde lat izq  :
						if ( j==0 ){
						for (y=-1;y<2;y++){
						for (x=0;x<2;x++){
							if ( x==0 && y==0 ){
								//no se agrega nada
							}
							else if (array[i+x][j+y]==alive){
								neigbors[i][j]++;
							}			
							}
						}}
					
						//se imponen las condiciones para el borde lateral der:
						else if ( j==(m-1)){
						for (y=-1;y<2;y++){
						for (x=-1;x<1;x++){
							if ( x==0 && y==0 ){
								//no se agrega nada
							}
							else if (array[i+x][j+y]==alive){
								neigbors[i][j]++;
							}			
						}
					}}}
					
					//bordes sup e inf
					else if ( !(i>0 && i<(n-1)) && (j>0 && j<(m-1)) ){
						
						//se imponen las condiciones para el borde sup :
						if ( i==0 ){
						for (y=0;y<2;y++){
						for (x=-1;x<2;x++){
							if ( x==0 && y==0 ){
								//no se agrega nada
							}
							else if (array[i+x][j+y]==alive){
								neigbors[i][j]++;
							}			
							}
						}}
					
						//se imponen las condiciones para el borde inf:
						else if ( i==(n-1)){
						for (y=-1;y<1;y++){
						for (x=-1;x<2;x++){
							if ( x==0 && y==0 ){
								//no se agrega nada
							}
							else if (array[i+x][j+y]==alive){
								neigbors[i][j]++;
							}			
						}
					}}}
					
					
					
				//esto solo me indica que cuando cuando este en la fila sup o inf no se haga nada
				else if ( i==0 || i==n){
					//printf("\nEstoy en el primer o en el ultimo renglon\n");
					//printf("[%d][%d]=%c",i,j,array[i][j]);
					}
				//esto me indica que si esta en el borde derecho o izq no se haga nada	
				else if ( j==0 || j==m){
					//printf("\nEstoy en el primer o en el ultima columna\n");
					//printf("[%d][%d]=%c",i,j,array[i][j]);
					}	
				//esto me muestra el numero de vecinos que hay en los valores centrales de la matriz, ya que no evalua los de los bordes y esquinas	
				//printf("\nEl numero de vecinos en la posicion (%d,%d)=%d\n",i,j,neigbors[i][j]);	
				//estas son las reglas del juego
				//reglas del juego de la vida en funcion del numero de vecinos, si te muestran la parte logica de como esta funcionado el programa
				//pero no hacen nada solo son para guiarte por eso las comente
				if ( array[i][j]==alive && (neigbors[i][j]==2 || neigbors[i][j]==3)){
					//printf("\nLa celular vive!");
				}
				else if ( array[i][j]==alive && (neigbors[i][j]>3 || neigbors[i][j]<2)){
					//printf("\nLa celula muere por sobre poblacion o por baja poblacion");
				}
				else if ( array[i][j]==death && neigbors[i][j]==3){
					//printf("\nLa celula muerta revive");
				}
				else {
					//printf("\nla celula muerta permanece muerta");
				}
				
				}
			
			}	
		//imprimo los valores del numero de vecinos para ver haya sido correcto el funcionamiento del programa hasta ahora
		/*printf("\nla celula (1,1) tiene %d\n",neigbors[1][1]);
		printf("\nla celula (1,2) tiene %d\n",neigbors[1][2]);
		printf("\nla celula (2,1) tiene %d\n",neigbors[2][1]);
		printf("\nla celula (2,2) tiene %d\n",neigbors[2][2]);*/
		
		//esto se pone afura del for anidado por que si si se pone adenro se sobre escribe en la matriz y se cambia la configuacion inicial en cada ciclo
		//por lo que no se evaluan a todos los vecinos
		//se procede a generar la siguiente generacion de celulas con los valores de vecinos que presenta la matriz de las celulas
		for (i=0;i<n;i++)
		{
			//se esta revisando en cada coordenada de la matriz si el valor se queda intacto o cambia segun las reglas del juego
			for (j=0;j<m;j++){
				//se aplican las reglas del juego:
				if ( array[i][j]==alive && (neigbors[i][j]==2 || neigbors[i][j]==3)){
						//no se hace cambios ya que se debe mantener el valor ya que cumple la regla
				}
				else if ( array[i][j]==alive && (neigbors[i][j]>3 || neigbors[i][j]<2)){
						//la celual que esta viva no va a seguir en la sig generacion es decir que cambia de @ a .
						array[i][j]=death;
				}
				else if ( array[i][j]==death && neigbors[i][j]==3){
						//la celula muerta revive es decir que cambia de . a @
						array[i][j]=alive;
				}	
				else {
					//no se hace nada ya que las muestras permancen muertas
				}
				
			}
		}	
			
			
		// Estas lineas me permiten limpiar la terminal para que solo se vea el cambio de patrones en la matriz y parezca que se mueve		
		delay(t);
		system("clear");
		//printf("Esto se imprimio despues de limpiarse la pantalla y de acabar el for");
		
		
		
		
	}
	
	
	
	
	
	
	system("clear");
	//acabo de imprimir las generaciones
	system("figlet GAME OVER");
}




