<?php
/**
 * Formulários simples de busca da wiki-ema
 * 
 * @version 0.2
 * @since 0.6
 * @author hgodinho.com
 */
?>

<?php
/**
 * Formulário de busca para Arquivo de autores
 */
    if(is_post_type_archive( array('autores') )){
?>
<form id="search" class="" method="get">
    <div class="input-group input-group">
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Buscar um artista"
            aria-label="Buscar" aria-describedby="button-addon2">

        <input type="hidden" value="1" name="sentence" />
        <input type="hidden" value="autores" name="post_type" />

        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>
<?php
    }
?>

<?php 
/**
 * Formulário de busca para arquivo de obras
 */
    if(is_post_type_archive( array('obras') )){
?>
<form id="search" class="" method="get">
    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-search"></i></div>
        </div>

        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="form-control" placeholder="encontre uma obra"
            aria-label="Buscar" aria-describedby="button-addon2">
        <input type="hidden" value="1" name="sentence" />
        <input type="hidden" value="obras,autores" name="post_type" />

        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="button-addon2">buscar</button>
        </div>
    </div>
</form>
<?php
    }
?>