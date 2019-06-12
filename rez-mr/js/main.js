$.scrollify({
    section : ".roll",
    sectionName : "section-name",
    interstitialSection : "",
    easing: "easeOutExpo",
    scrollSpeed: 1100,
    offset : 0,
    scrollbars: false,
    standardScrollElements: "",
    setHeights: true,
    overflowScroll: true,
    updateHash: true,
    touchScroll:true,
    before:function(section) {
        if (section <= 1) {
            $(".round").addClass("inverse");
        }
        if (section == 0) {
            $(".round").removeClass("inverse");
        }
    },
    after:function() {},
    afterResize:function() {},
    afterRender:function() {}
  });