$(document).ready(function() {
    $('.product_category_item_video_link').on('click', function() {
      let product_modal = $(this).attr('id');
      product_modal = '.' + product_modal;
      $(product_modal).stop().fadeIn();
    });
  
    $(".modal_cancel").on('click', function() {
      $(".modal").stop().fadeOut();
    });
  
    // Get all modal contents
    document.querySelectorAll(".modal_main_content").forEach(function(modalContent) {
        const iframe = modalContent.querySelector('iframe');
        const video = modalContent.querySelector('video');
        
        // Enable JS API on iframe if it's a YouTube player
        if (iframe) {
            let src = iframe.src;
            if (src && !src.includes('enablejsapi=1')) {
                const separator = src.includes('?') ? '&' : '?';
                iframe.src = src + separator + 'enablejsapi=1';
            }
        }
    
        // Pause on modal cancel
        document.querySelector(".modal_cancel").addEventListener('click', function() {
            pauseMedia();
        });
    
        // Listen for Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === "Escape") {
                // Close modal
                pauseMedia();
            }
        });
    
        // Pause media function
        function pauseMedia() {
            $(".modal").stop().fadeOut();
            
            // Pause YouTube iframe (if present and loaded)
            if (iframe) {
                const playerWindow = iframe.contentWindow;
                playerWindow.postMessage(
                    JSON.stringify({
                        event: "command",
                        func: "pauseVideo",
                        args: ""
                    }),
                    "*"
                );
            }
            
            // Pause native video
            if (video) {
                video.pause();
            }
        }
    });

      
    // Close modal
    $(".modal_back").on('click', function() {
        $(".modal").stop().fadeOut();
    });      
});
  