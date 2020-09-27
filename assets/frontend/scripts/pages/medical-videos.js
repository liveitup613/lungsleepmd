function onVideoShow(id) {
    jQuery('#youtube-video').attr('src', 'https://www.youtube.com/embed/' + id);
    jQuery('.et_pb_scroll_top').click();
}