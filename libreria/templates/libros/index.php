{% extends "base.html"%}

{% block titulo%} Lista de libros {% endblock %}
    

    {% block contenido %}
    
    <div class="card">
        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="{%url 'crear' %}" role="button">agregar nuevo libro</a>
        </div>
        <div class="card-body">
            <h4 class="card-title">Libros</h4>
            

            <div class="table">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        {% for libro in libros %}
                            <tr>
                            <td> {{libro.id}} </td>
                            <td>{{libro.titulo}}</td> 
                            <td>{{libro.descripcion}}</td>
                            <td>
                           <img src="{{libro.imagen.url}}" height="100" /> 
                            </td>
                            <td> <a name="" id="" class="btn btn-primary" href="{%url 'editar' libro.id %}" role="button">editar</a> / <a name="" id="" class="btn btn-primary" href="{%url 'eliminar' libro.id%}" role="button">Borrar</a></td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            
        </div>
        <div class="card-footer text-muted">
            
        </div>
    </div>
    
    {% endblock %}