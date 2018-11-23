
#Epic Wars

Este juego planea ser el mejor MMORPG del mundo superando por mucho al **World of Warcraft**, para ello necesitamos iniciar con el pie derecho, ¿No es así?

Usted como gran ingeniero escribirá las entidades base de éste gran juego y se apoyará de los patrones de diseño más adecuados para evitar problemas a futuro con la creación de objetos y el crecimiento del proyecto.

##Clases

####Character
1. La clase base de todos los personajes será Character y cuenta con los atributos (los cuales serán pasados al constructor a excepción de la clase que ya viene inicializada):
	1. **nombre**
	2. **raza**
	3. **clase** (que por defecto es "normal")
	3. **hp** (healt points)
	4. **mn** (mana)
	4. **str** (strength)*
	5. **md** (magic damage)*
	6. **ag** (agility)*

	Además la clase base cuenta con los métodos:
	
	1. **attack:** que se basará en el atributo principal del personaje para hacer daño a otro personaje, en el caso de un personaje con la clase "normal" el daño del ataque se calcula así: [el mayor valor de sus atributos*] * 0.4. Entonces, si el personaje tiene str = 12, md = 15 y ag = 22, el daño sería 22 * 0.4 = 8.8 hp. Se imprimirá entonces el siguiente mensaje: [nombre] ataca a [nombre] causando [daño] de daño.
	2.  **getHurt:** que recibe como parametro la cantidad de puntos de vida a restar de la vida del personaje y si la cantidad restande después del cálculo es menor o igual a 0, el personaje ejecutará el método **dramaticDeath**. 
	3. **dramaticDeath:** el personaje gritará diciendo: Arrrg! yo [nombre] he sido derrotado en batalla.

####Warrior
1. La clase de la fuerza (str), guerreros invencibles contra los Rogues, con un aguante increíble y alimentados por la ira en combate. Cuenta con los atributos (los cuales serán pasados al constructor a excepción de la clase que ya viene inicializada):
	1. **nombre**
	2. **raza**
	3. **clase** (que por defecto es "warrior")
	3. **hp** (healt points x 2)
	4. **mn** (mana x 0)
	4. **str** (strength = valor al crear x 1.5)* 
	5. **md** (magic damage)*
	6. **ag** (agility)*

	Además la clase base cuenta con los métodos:
	
	1. **attack:** que se basará en el atributo principal del personaje en esteo caso, str, y el cálculo de su daño es: [str] * 0.6. Si el enemigo al que se ataca es de la clase Rogue, entonces se calculará así: [str] * 2.5. Se imprimirá entonces el siguiente mensaje: [nombre] ataca a [nombre] causando [daño] de daño.
	2.  **getHurt:** que recibe como parametro la cantidad de puntos de vida a restar de la vida del personaje y si la cantidad restande después del cálculo es menor o igual a 0, el personaje ejecutará el método **dramaticDeath**. 
	3. **dramaticDeath:** el personaje gritará diciendo: Arrrg! yo [nombre], el gran guerrero, he sido derrotado en batalla.

####Mage
1. La clase de la mágia (md), encantadores y hechiceros invencibles contra los Warriors, con un maná increíble y alimentados por inteligencia en combate. Cuenta con los atributos (los cuales serán pasados al constructor a excepción de la clase que ya viene inicializada):
	1. **nombre**
	2. **raza**
	3. **clase** (que por defecto es "mage")
	3. **hp** (healt points)
	4. **mn** (mana x 5)
	4. **str** (strength)* 
	5. **md** (magic damage = valor al crear x 2.5)*
	6. **ag** (agility)*

	Además la clase base cuenta con los métodos:
	
	1. **magicAttack:** que se basará en el atributo principal del personaje en esteo caso, md, y el cálculo de su daño es: [md] * 1.5. Si el enemigo al que se ataca es de la clase Warrior, entonces se calculará así: [md] * 4.5. Se imprimirá entonces el siguiente mensaje: [nombre] ataca a [nombre] causando [daño] de daño.
	2.  **getHurt:** que recibe como parametro la cantidad de puntos de vida a restar de la vida del personaje y si la cantidad restande después del cálculo es menor o igual a 0, el personaje ejecutará el método **dramaticDeath**. 
	3. **dramaticDeath:** el personaje gritará diciendo: Oh! yo [nombre], he sido derrotado en batalla.

####Rogue
1. La clase de las sombras y el engaño (ag), ladrones invencibles contra los Mages, con una agilidad increíble y alimentados por el engaño en combate. Cuenta con los atributos (los cuales serán pasados al constructor a excepción de la clase que ya viene inicializada):
	1. **nombre**
	2. **raza**
	3. **clase** (que por defecto es "rogue")
	3. **hp** (healt points x 1.2)
	4. **mn** (mana x 0)
	4. **str** (strength)* 
	5. **md** (magic damage)*
	6. **ag** (agility = valor al crear x 2)*

	Además la clase base cuenta con los métodos:
	
	1. **attack:** que se basará en el atributo principal del personaje en esteo caso, ag, y el cálculo de su daño es: [ag] * 1.5. Si el enemigo al que se ataca es de la clase Mage, entonces se calculará así: [ag] * 3.5; si por el contrario es Warrior [ag] * 0.5. Se imprimirá entonces el siguiente mensaje: [nombre] ataca a [nombre] causando [daño] de daño.
	2.  **getHurt:** que recibe como parametro la cantidad de puntos de vida a restar de la vida del personaje y si la cantidad restande después del cálculo es menor o igual a 0, el personaje ejecutará el método **dramaticDeath**. 
	3. **dramaticDeath:** el personaje gritará diciendo: [nombre] muere en silencio.

Complete con las instrucciones indicadas en el **index.php** un ejemplo del juego.

Las características de los personajes a crear serán (excepto el nombre que es libre para usted):

1. Warrior:
	2. raza: humano
	3. hp: 100
	4. mn: 50
	5. str: 50
	6. md: 0
	7. ag: 25

1. Mage:
	2. raza: elfo
	3. hp: 100
	4. mn: 50
	5. str: 10
	6. md: 50
	7. ag: 15

1. Rogue:
	2. raza: hombre lobo
	3. hp: 100
	4. mn: 10
	5. str: 20
	6. md: 3
	7. ag: 50


	