<x-app-layout>
    <div class="inline-flex items-center justify-around" style="width: 100%">
        <div style="padding-top: 20px; display: block; width: 20%;">
            <div style="text-align: center; padding-bottom: 20px; justify-content:space-around">
                <p>{{ auth()->user()->name }}</p>
            </div>
            <div class="flex" style="text-align: center; justify-content:space-around">
                <div style="width 100%">
                    <p style="padding: 0px 10px 0px 0px;">Programa</p>
                    <p style="padding-bottom: 30px;">Rol</p>

                    <p style="padding: 0px 10px 0px 0px;">Ingreso</p>
                    <p style="padding: 0px 10px 0px 0px;">Nacimiento</p>
                    <p style="padding: 0px 10px 0px 0px;">Género</p>
                    <p style="padding: 0px 10px 0px 0px;">Pais</p>
                    <p style="padding: 0px 10px 0px 0px;">Teléfono</p>
                    <p style="padding: 0px 10px 0px 0px;">E-mail</p>
                    <p style="padding: 0px 10px 0px 0px;">ID</p>
                </div>
                <div style="width 100%">
                    <p style="padding: 0px 10px 0px 0px;">Ing. Software</p>
                    <p style="padding-bottom: 30px;">Estudiante</p>

                    <p style="padding: 0px 10px 0px 0px;">{{ auth()->user()->created_at->format('d/m/Y') }}</p>
                    <p style="padding: 0px 10px 0px 0px;">23/Jul/1999</p>
                    <p style="padding: 0px 10px 0px 0px;">Masculino</p>
                    <p style="padding: 0px 10px 0px 0px;">Colombia</p>
                    <p style="padding: 0px 10px 0px 0px;">+57 300 000 0000</p>
                    <p style="padding: 0px 10px 0px 0px;">{{ auth()->user()->email }}</p>
                    <p style="padding: 0px 10px 0px 0px;">000 000 000</p>
                </div>
            </div>
        </div>
        <div style="margin: 30px auto; width: 65%; display: inline-flex; justify-content: space-around;">
            <div style="display: grid; grid-template-columns: repeat(3, 1fr);">
                <div style="color: black; border: 1px; border-style: solid; border-radius: 2px; max-width: 350px; text-align: center; margin: 15px 15px; cursor: pointer;">
                    <img style="max-width: 100%; max-height: 90%;" src="Images\math-image.jpg" alt="math-image">
                    <div>
                        <p>Matemáticas Básicas</p>
                        <p>Ciencias Basicas</p>
                    </div>
                </div>
                <div style="color: black; border: 1px; border-style: solid; border-radius: 2px; max-width: 350px; text-align: center; margin: 15px 15px; cursor: pointer;">
                    <img style="max-width: 100%; max-height: 90%;" src="Images/oriented-object-programming.png" alt="oriented-object-programming">
                    <div>
                        <p>Programación orientada a objetos</p>
                        <p>Programación</p>
                    </div>
                </div>
                <div style="color: black; border: 1px; border-style: solid; border-radius: 2px; max-width: 350px; text-align: center; margin: 15px 15px; cursor: pointer;">
                    <img style="max-width: 100%; max-height: 90%;" src="Images/web-design.jpg" alt="web-design">
                    <div>
                        <p>Diseño web</p>
                        <p>Programación</p>
                    </div>
                </div>
                <div style="color: black; border: 1px; border-style: solid; border-radius: 2px; max-width: 350px; text-align: center; margin: 15px 15px; cursor: pointer;">
                    <img style="max-width: 100%; max-height: 90%;" src="Images/english.jpg" alt="english">
                    <div>
                        <p>Inglés V</p>
                        <p>Inglés</p>
                    </div>
                </div>
                <div style="color: black; border: 1px; border-style: solid; border-radius: 2px; max-width: 350px; text-align: center; margin: 15px 15px; cursor: pointer;">
                    <img style="max-width: 100%; max-height: 90%;" src="Images/cybersecurity.png" alt="cybersecurity">
                    <div>
                        <p>Ciberseguridad</p>
                        <p>Optativa</p>
                    </div>
                </div>
                <div style="color: black; border: 1px; border-style: solid; border-radius: 2px; max-width: 350px; text-align: center; margin: 15px 15px; cursor: pointer;">
                    <img style="max-width: 100%; max-height: 90%;" src="Images/statistics.png" alt="statistics">
                    <div>
                        <p>Probabilidad y estadística</p>
                        <p style="">Matemáticas</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 20px; width: 15%; display: flex; justify-content: space-around;">
            <div style="justify-content: space-between; text-align: center; width: 70%;">
                <ul>
                    <li style="list-style: none; text-align: center; padding: 5px;"><a href="">Anuncios</a></li>
                    <li style="list-style: none; text-align: center; padding: 5px;"><a href="">Tareas</a></li>
                    <li style="list-style: none; text-align: center; padding: 5px;"><a href="">Personas</a></li>
                    <li style="list-style: none; text-align: center; padding: 5px;"><a href="">Archivos</a></li>
                    <li style="list-style: none; text-align: center; padding: 5px;"><a href="">Quizzes</a></li>
                    <li style="list-style: none; text-align: center; padding: 5px;"><a href="">Módulos</a></li>
                    <li style="list-style: none; text-align: center; padding: 5px;"><a href="">Chat</a></li>
                    <li style="list-style: none; text-align: center; padding: 5px;"><a href="">Ajustes</a></li>
            </div>
        </div>
    </div>
</x-app-layout>
