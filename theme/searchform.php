<div class="sf">
	<form action="">
		<dl class="sf_freeword">
			<dt>フリーワード</dt>
			<dd><input name="s" type="text" value="<?php echo keep_search_value(); ?>"></dd>
		</dl>
		<dl class="sf_status">
			<dt>ステータス</dt>
			<dd>
				<select name="status" id="sfStatus">
				<?php $statusarray = array(
					'選択しない' => '',
					'未読'  => 'midoku',
					'読中'  => 'dokuchu',
					'読了'  => 'dokuryo' );
				foreach ($statusarray as $key => $value): ?>
					<option value="<?php echo $value; ?>" <?php echo keep_search_value('select','status',$value); ?>><?php echo $key; ?></option>
				<?php endforeach ?>
				</select>
			</dd>
		</dl>
		<dl class="sf_genre">
			<dt>ジャンル</dt>
			<dd>
				<select name="genre" id="sfGenre">
				<?php $statusarray = array(
					'選択しない'       => '',
					'純文学'       => 'junbungaku',
					'ミステリ'      => 'mystery',
					'SF・ファンタジー' => 'sffantasy' );
				foreach ($statusarray as $key => $value): ?>
					<option value="<?php echo $value; ?>" <?php echo keep_search_value('select','genre',$value); ?>><?php echo $key; ?></option>
				<?php endforeach ?>
				</select>
			</dd>
		</dl>
		<dl class="sf_label">
			<dt>レーベル</dt>
			<dd>
				<select name="label" id="sfLabel">
				<?php $statusarray = array(
					'選択しない'     => '',
					'電撃文庫'    => 'dengekibunko',
					'講談社ノベルス' => 'kodanshanovels' );
				foreach ($statusarray as $key => $value): ?>
					<option value="<?php echo $value; ?>" <?php echo keep_search_value('select','label',$value); ?>><?php echo $key; ?></option>
				<?php endforeach ?>
				</select>
			</dd>
		</dl>
		<dl class="sf_size">
			<dt>サイズ</dt>
			<dd>
				<select name="size" id="sfSize">
				<?php $statusarray = array(
					'選択しない' => '',
					'文庫'  => 'bunko',
					'新書'  => 'shinsho' );
				foreach ($statusarray as $key => $value): ?>
					<option value="<?php echo $value; ?>" <?php echo keep_search_value('select','size',$value); ?>><?php echo $key; ?></option>
				<?php endforeach ?>
				</select>
			</dd>
		</dl>
		<p class="sf_button"><input type="submit" value="検索"></p>
	</form>
</div>
