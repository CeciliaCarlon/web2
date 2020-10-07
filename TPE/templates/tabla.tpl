{include file="header.tpl"}
{include file="botonera.tpl"}
    <div class="semantica_medio">
        <article>
            <h2>Peliculas</h2>
            <section>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Director/a</th>
                            <th>Estreno</th>
                            <th>Genero</th>
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        {foreach from=$peliculas item=pelicula}
                            <tr>
                                <td>{$pelicula->titulo}</td>
                                <td>{$pelicula->descripcion}</td>
                                <td>{$pelicula->director}</td>
                                <td>{$pelicula->estreno}</td>
                                <td>{$pelicula->tipo}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </section>
        </article>
        <aside>
            {include file="filtro.tpl"}
        </aside>
    </div>
{include file="footer.tpl"}