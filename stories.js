// Create empty array
var arrayplace = [];
//Creastion of first main class with constructor method - Use of Place as location is a reserved word
var Videoseff = /** @class */ (function () {
    // ②    
    function Videoseff(video, title) {
        this.video = video;
        this.title = title;
        arrayplace.push(this);
    }
    Videoseff.prototype.display = function () {
        return "            <div class=\"card-deck\">            \n                   <div class=\"card mb-4 text-white teaser hovereffect\" style=\"background-color: #4775B3;\">\n                      <iframe width=\"100%\" height=\"240\" src=" + this.video + " frameborder=\"0\" \n                      allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n                       <div class=\"card-body text-center\" style=\"background-color: #135887\">\n                               <h5 class=\"card-title\">" + this.title + " </h5>\n                        </div>\n                      </div>                \n                       \n                  \n               \n               </div>\n\n      \n               ";
    };
    return Videoseff;
}());
;
// Here starts the place where you can fulfill the content with new Variables. Be carefull with the typo, there are 3 different classes that need different arguments
var video1 = new Videoseff("https://www.youtube.com/embed/-IgM8Rag_qk", "Entrepreneurs For Future: Gemeinsam laut!<br>               ");
var video2 = new Videoseff("https://www.youtube.com/embed/m1YuldpTkXI", "Entrepreneurs For Future beim Klimastreik in Berlin          ");
var video3 = new Videoseff("https://www.youtube.com/embed/ELWGRX7jGw0", "Alnatura für mehr Klimaschutz! Entrepreneurs For Future          ");
var video4 = new Videoseff("https://www.youtube.com/embed/HEckkbA7K1o", "E4F zum FFF-Momentum");
var video5 = new Videoseff("https://www.youtube.com/embed/HNAEGPWOnis", "E4F zu den E4F-Forderungen");
var video6 = new Videoseff("https://www.youtube.com/embed/FvI4PHxTrio", "E4F u.a. zum Kohleausstieg");
var video7 = new Videoseff("https://www.youtube.com/embed/ePLkeVI2YWw", "E4F zum künftigen Wirtschaften");
var video8 = new Videoseff("https://www.youtube.com/embed/8oOABc5jraE", "E4F zur CO2-Abgabe");
var video9 = new Videoseff("https://www.youtube.com/embed/cebuPnRDThQ", "JobRad für mehr Klimaschutz! Entrepreneurs For Future");
var video10 = new Videoseff("https://www.youtube.com/embed/mRtAbKmT19M", "Naturstrom für mehr Klimaschutz! Entrepreneurs For Future");
var video11 = new Videoseff("https://www.youtube.com/embed/Qa-EeauhQZo", "Werner & Mertz für mehr Klimaschutz! Entrepreneurs For Future");
//Here ends the place to fulfill the variable
// looping the elements for teaser creation 
for (var i = 0; i < arrayplace.length; i++) {
    document.getElementById('typescriptimport').innerHTML += arrayplace[i].display();
}
