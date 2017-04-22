<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Regitro de Trabajos</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        
    </head>
    <body>
        <h1>Registro de Trabajos</h1>
        
        <form>
            <label>Código Orden:</label> <input type="text" name="codigo_orden"><br>
            <label>Fecha Recepción</label><input type="date" name="fecha_recepción"><br>
            
            <label>Cliente</label>
            <select>
                <option>Cliente 1</option>
                <option>Cliente 2</option>
            </select><br>
            <label>Equipo</label>
            <select> <!--en base al cliente trae los equipos -->
                <option>Equipo 1</option>
                <option>Equipo 2</option>
            </select><br>
            
            <label>Técnico</label>
            <select> <!--lo eligo yo-->
                <option>Técnico 1</option>
                <option>Técnico 2</option>
            </select>
            <br>
            
            
            <div>
                en este div hacer algo para la carga de tareas
            </div>
            
            <label>Estado</label>
            <select>
                <option>FINALIZADO</option>
                <option>PENDIENTE</option>
            </select><br>
            <label>Observaciones</label><input type="text" name="observaciones"><br>


            <!--los valores de montos se obtienen de una sumatoria de las prácticas ingresadas-->

            <label>Monto Técnico</label><input type="number" name="monto_tecnico"> <!--monto calculado, no se puede editar--><br>
            <label>Monto Balku</label><input type="number" name="monto_balku"><!--monto calculado, no se puede editar--> <br>
            
            <label>Monto Total</label><input type="number" name="monto_total"> <!--monto calculado, no se puede editar--> <br>

            <label>Logística</label><input type="number" name="monto_logistica"><!--monto calculado, no se puede editar--> <br>

            <label>Descuento</label><input type="number" name="porcentaje_descuento"><!--monto calculado, no se puede editar--> <br>
            <label>Precio Final</label><input type="number" name="precio_final"><!--monto calculado, no se puede editar--> 
            
        </form>
        
        <div>
            <a href="/">volver</a>
        </div>
    </body>
</html>
