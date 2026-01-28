jQuery(document).ready(function($) {
    const loadMoreBtn = $('#load-more-btn');
    const loader = $('#load-more-loader');
    const container = $('#blog-posts-container');
    const remainingCount = $('.remaining-count');
    
    if (!loadMoreBtn.length) return;
    
    const currentPage = parseInt(loadMoreBtn.data('page')) || 2; 
    const maxPages = parseInt(loadMoreBtn.data('max-pages')) || 1;
    const category = loadMoreBtn.data('category') || '';
    const postsPerPage = parseInt(loadMoreBtn.data('posts-per-page')) || 8;
    const totalPosts = parseInt(loadMoreBtn.data('total-posts'));
    
    function updateButtonText() {
        const postsLoaded = (currentPage - 1) * postsPerPage;
        const remaining = totalPosts - postsLoaded;
        
        if (remaining <= 0 || currentPage > maxPages) {
            loadMoreBtn.prop('disabled', true);
            remainingCount.hide();
            return false;
        }
        
        const text = ajax_object.language === 'ru' ? 'Загрузить еще' : 'Завантажити ще';
        loadMoreBtn.text(text);
        remainingCount.text(' (' + remaining + ' ' + (ajax_object.language === 'ru' ? 'еще' : 'ще') + ')');
        return true;
    }
    
    updateButtonText();
    
    let offset = parseInt(loadMoreBtn.data('offset'));
    
    const perLoad = 4;

    loadMoreBtn.on('click', function () {
        loader.show();
        loadMoreBtn.prop('disabled', true);
    
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'load_more_posts',
                offset: offset,
                posts_per_page: perLoad,
                category: category,
                nonce: ajax_object.nonce
            },
            success: function (response) {
                if (response === 'no_more_posts') {
                    loadMoreBtn.hide();
                    return;
                }

                const newPosts = $(response);
                newPosts.each(function () {
                    const postId = $(this).data('id');
                    if (!container.find(`[data-id="${postId}"]`).length) {
                        container.append(this);
                    }
                });
                offset += perLoad;
                loadMoreBtn.data('offset', offset);
    
                if (offset >= totalPosts) {
                    loadMoreBtn.hide();
                } else {
                    loadMoreBtn.prop('disabled', false);
                }
            },
            complete: function () {
                loader.hide();
            }
        });
    });
});