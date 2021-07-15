$(function(){
    var player = $('.video').get(0);	//videoタグの要素を取得
	
	player.play();	//動画の再生
    player.addEventListener('ended',function() {
		$('.video').remove();	//videoタグをDOM的に削除
	});
})