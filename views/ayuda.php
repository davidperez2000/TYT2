<?php
 if ($_SESSION['user']=="admin") {
    ?>
    <div>
<form name="nombrar" action="">
<label for="users">Usuarios:</label>
	<select name="nombre" id="nombre">
		<?php foreach($users as $nombre) : ?>
			<option> <?php echo $nombre ?> </option>
		<?php endforeach; ?>
	</select>
        <input name="ban" type="submit"  id="ban" value="ban" />
    </form>
</div>
<?php
echo "<button><a href='limpiar.php'>Limpiar chat</a></button>"; 
}
?>