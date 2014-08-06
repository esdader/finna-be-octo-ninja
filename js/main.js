// main javascript file

var SouthAustinBrewery = SouthAustinBrewery || {};

SouthAustinBrewery = {
    init: function (config) {
        var self = this;

        self.photoRatio  = 2000 / 1333;
        self.sideCrop    = 0;
        self.imageWidth  = 0;
        self.slideImage  = $('.item-img');
        self.slideHolder = $('.item');

        if (!Modernizr.touch) {
            self.scaleLayout();
        } else {
            self.scaleSlides();
        }

        self.vents();
    },

    findLayout: function () {
        var self = this;

        self.winHeight = $(window).height();
        self.winWidth  = $(window).width();
        self.aspectRatio = self.winWidth / self.winHeight;
    },

    vents: function () {
        var self = this;

        $(window).resize(function(){
            
            if (!Modernizr.touch) {
                self.scaleLayout();
            } else {
                self.scaleSlides();
            }
        });
    },

    scaleLayout: function () {
        var self = this,
            topOffset = 0,
            activeSlide = $('.slick-active');

        self.findLayout();
        
        if (self.aspectRatio > self.photoRatio) {

            self.slideImage.css({
                'margin-left' : '0',
                'margin-top' : '-' + topOffset + 'px',
                'width' : self.winWidth+'px',
                'height' : 'auto'
            });

        } else {
            self.sideCrop = (self.winHeight *  self.photoRatio - self.winWidth) / 2;
            self.imageWidth = self.winHeight * self.photoRatio;
            var marginLeft = '-' + self.sideCrop + 'px';
            self.slideImage.css({
                'margin-left' : '-'+self.sideCrop+'px',
                'width' : self.imageWidth+'px',
                'height' : self.winHeight+'px'
            });

        }
    },

    scaleSlides: function () {
        var self = this,
            topOffset = 0;
        self.findLayout();

        if (self.aspectRatio > self.photoRatio) {

            if ( self.shortenTop === true) {
                topOffset = 1011 / 2000 * self.winWidth - self.winHeight;

                if (topOffset < 0) {
                    topOffset = 0;
                }
            }
           
           self.slideImage.css({
                'margin-left' : '0',
                'width' : self.winWidth+'px',
                'height' : 'auto',
                'margin-top' : '-' + topOffset + 'px'
            });
        } else {
            self.sideCrop = (self.winHeight * self.photoRatio - self.winWidth) / 2;
            self.imageWidth = self.winHeight * self.photoRatio;
            self.slideImage.css({
                'margin-left' : '-'+self.sideCrop+'px',
                'width' : self.imageWidth+'px',
                'height' : self.winHeight+'px'
            });
        }

    }
};