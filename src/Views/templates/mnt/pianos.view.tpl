<h1>Trabajar con Pianos</h1>
<section>

</section>
<section>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripción</th>
        <th>Historia</th>
        <th>Ventas</th>
        <th>img</th>
        <th>imgThb</th>
        <th>Precio</th>
        <th>Estado</th>
        <th><a href="index.php?page=Mnt-Piano&mode=INS">Nuevo</a></th>
      </tr>
    </thead>
    <tbody>
      {{foreach Pianos}}
      <tr>
        <td>{{pianoid}}</td>
        <td> <a href="index.php?page=Mnt-Piano&mode=DSP&id={{pianoid}}">{{pianodsc}}</a></td>
        <td>{{pianobio}}</td>
        <td>{{pianosales}}</td>
        <td>{{pianoimguri}}</td>
        <td>{{pianoimgthb}}</td>
        <td>{{pianoprice}}</td>
        <td>{{pianoest}}</td>

        <td>
          <a href="index.php?page=Mnt-Piano&mode=UPD&id={{invPrdId}}">Editar</a>
          &NonBreakingSpace;
          <a href="index.php?page=Mnt-Piano&mode=DEL&id={{invPrdId}}">Eliminar</a>
        </td>
      </tr>
      {{endfor Pianos}}
    </tbody>
  </table>
</section>