document.addEventListener('alpine:init', () => {

    Alpine.data('formation', () => ({
        show_licence: 'yes',
        show_master: 'yes',
        show_doctorat: 'yes',
        show_certification: 'yes',
        licence: 'none',
        master: 'none',
        doctorat: 'none',
        formation_continue: 'none',
        initial: '',

        select(diploma) {
            if(this.initial !== diploma) {
                this.initial = diploma
                if(diploma === 'licence') {
                    this.licence = 'licence'
                    this.master = 'none'
                    this.doctorat = 'none'
                    this.formation_continue = 'none'
                    this.show_licence = 'yes'
                    this.show_master = 'no'
                    this.show_doctorat = 'no'
                    this.show_certification = 'no' 
                } else if(diploma === 'master') {
                    this.licence = 'none'
                    this.master = 'master'
                    this.doctorat = 'none'
                    this.formation_continue = 'none'    
                    this.show_licence = 'no'
                    this.show_master = 'yes'
                    this.show_doctorat = 'no'
                    this.show_certification = 'no'                                                             
                } else if(diploma === 'doctorat') {
                    this.licence = 'none'
                    this.master = 'none'
                    this.doctorat = 'doctorat'
                    this.show_licence = 'no'
                    this.show_master = 'no'
                    this.show_doctorat = 'yes'
                    this.show_certification = 'no'
                    this.formation_continue = 'none'                                                                    
                } else if(diploma === 'formation_continue') {
                    this.licence = 'none'
                    this.master = 'none'
                    this.doctorat = 'none'
                    this.formation_continue = 'formation_continue'
                    this.show_licence = 'no'
                    this.show_master = 'no'
                    this.show_doctorat = 'no'
                    this.show_certification = 'yes'                                                                
                }
            } else {
                this.initial = diploma
                this.licence = 'none'
                this.master = 'none'
                this.doctorat = 'none'
                this.formation_continue = 'none'
                this.show_licence = 'yes'
                this.show_master = 'yes'
                this.show_doctorat = 'yes'
                this.show_certification = 'yes'
            }
            
        }
    }));




    // Alpine.data('memoire', () => ({
    //     error_promotion: '',
    //     error_diploma: '',
    //     error_filiere: '',
    //     filiere: '',
    //     promotion: '',
    //     diploma: '',
    //     loading: false,
    //     isRequired(value) {
    //         return (value.length == 0) ? 'Veuillez remplir ce champs' : ''
    //     },
    //     memoire_form() {
    //         this.loading = true

    //         this.error_promotion = this.isRequired(this.promotion)
    //         this.error_diploma = this.isRequired(this.diploma)
    //         this.error_filiere = this.isRequired(this.filiere)

    //         this.loading = false

    //         if (this.error_promotion === '' && this.error_diploma === '' && this.error_filiere === '') {
    //             let url = window.location.href+"/"+this.promotion+"_"+this.diploma+"_"+this.filiere
    //             window.location.href = url
    //         }

    //     }
    // }));




    Alpine.data('contact', () => ({
        lastname: '',
        firstname: '',
        email: '',
        message: '',
        object: '',
        error_lastname: '',
        error_firstname: '',
        error_email: '',
        error_object: '',
        error_message: '',
        success_message: '',
        loading: false,
        isSubmit: false,
        isRequired(value) {
            return (value.length == 0) ? 'Veuillez remplir ce champs' : ""
        },
        check_form() {
            if (this.isSubmit) {
                this.success_message = ""
                this.error_lastname = this.isRequired(this.lastname)
                this.error_firstname = this.isRequired(this.firstname)
                this.error_email = this.isRequired(this.email)
                this.error_object = this.isRequired(this.object)
                this.error_message = this.isRequired(this.message)

                if (this.error_lastname === "" && this.error_firstname === "" && this.error_email === "" && this.error_object === "" && this.error_message === "") {
                    return true
                } else {
                    return false
                }
            }
        },
        contact_form() {
            this.isSubmit = true;
            console.log(this.check_form())
            if (this.check_form()) {
                this.loading = true

                let myHeaders = new Headers();
                myHeaders.append("Cookie", "PHPSESSID=mpq80tluh25l025v4fu644ilg6");

                let formdata = new FormData();
                formdata.append("contactLastName", this.lastname);
                formdata.append("contactFirstName", this.firstname);
                formdata.append("contactEmail", this.email);
                formdata.append("contactMessage", this.message);
                formdata.append("contactObject", this.object);


                let requestOptions = {
                  method: 'POST',
                  headers: myHeaders,
                  body: formdata,
                  redirect: 'follow'
                };

                fetch(API_URL+"contact", requestOptions)
                .then(response => response.json())
                .then(data => {
                    this.lastname = ""
                    this.firstname = ""
                    this.email = ""
                    this.message = ""
                    this.object = ""

                    this.success_message = "Nous avons bien reçu votre message et nous allons vous revenir dans de bref délai."
                    this.loading = false
                    this.isSubmit = false;
                })
                .catch(error => {
                    console.log('error')
                });

            } else {
                this.loading = false
            }
        },
    }));






    Alpine.data('distinctions', () => ({
       distinctions: [],
       distinctions_search: [],
       pages: [],
       page: 1,
       search_string: '',
       text: '',
       search_form() {
            this.distinctions = this.distinctions_search
            let string_array = this.search_string.toLowerCase().split(' ')
            for (var i = string_array.length - 1; i >= 0; i--) {            
                this.distinctions = this.distinctions.filter(x => (x.distinctionYear.toString().toLowerCase().includes(string_array[i]) || x.distinctionDescription.toLowerCase().includes(string_array[i])));
            }
            this.paginate()
            console.log(this.distinctions)
       },
       paginate() {
            this.pages = []
            this.page = 1;
            for (var i = 0; i < this.distinctions.length; i++) {
                if (i % 25 == 0) {
                    this.pages.push(this.pages.length + 1)
                }
            } 
       },
        init() {
            let myHeaders = new Headers();
            myHeaders.append("Cookie", "PHPSESSID=mpq80tluh25l025v4fu644ilg6");

            let requestOptions = {
              method: 'GET',
              headers: myHeaders,
              redirect: 'follow'
            };

            this.loading = false

            fetch(API_URL+"distinctions", requestOptions)
            .then(response => response.json())
            .then(data => {
                this.distinctions = data
                this.distinctions_search = data
                this.paginate()
              })
              .catch(error => console.log('error', error));
        }
    }));







    Alpine.data('alumnis', () => ({
       alumnis: [],
       alumnis_search: [],
       pages: [],
       page: 1,
       search_string: '',
       text: '',
       year: '',
       diploma: '',
       faculty: '',
       country: '',
       allstring: '',
       get_string() {
        let res = this.year+' '+this.diploma+' '+this.faculty+' '+this.country+' '+this.search_string
        return res
       },
       search_form() {
            this.alumnis = this.alumnis_search
            let string_array = this.get_string().toLowerCase().split(' ')
            for (var i = string_array.length - 1; i >= 0; i--) {            
                this.alumnis = this.alumnis.filter(x => (
                    x.diplomaYear.toString().toLowerCase().includes(string_array[i]) || 
                    x.personName.toLowerCase().includes(string_array[i]) ||
                    x.diplomaFaculty.toLowerCase().includes(string_array[i]) ||
                    x.profil.toLowerCase().includes(string_array[i]) ||
                    x.contact.toLowerCase().includes(string_array[i]) ||
                    x.country.toLowerCase().includes(string_array[i]) 
                ));
            }
            this.paginate()
       },
       paginate() {
            this.pages = []
            this.page = 1;
            for (var i = 0; i < this.alumnis.length; i++) {
                if (i % 25 == 0) {
                    this.pages.push(this.pages.length + 1)
                }
            } 
       },
        init() {
            let myHeaders = new Headers();
            myHeaders.append("Cookie", "PHPSESSID=mpq80tluh25l025v4fu644ilg6");

            let requestOptions = {
              method: 'GET',
              headers: myHeaders,
              redirect: 'follow'
            };

            this.loading = false

            fetch(API_URL+"alumnis", requestOptions)
            .then(response => response.json())
            .then(data => {
                this.alumnis = data
                this.alumnis_search = data
                this.paginate()
              })
              .catch(error => console.log('error', error));
        }
    }));







    Alpine.data('memories', () => ({
       memories: [],
       memories_search: [],
       pages: [],
       page: 1,
       search_string: '',
       text: '',
       year: '',
       memoryId: '',
       diploma: '',
       faculty: '',
       country: '',
       email: '',
       profil: '',
       name: '',
       success_message: '',
       allstring: '',
       loading: false,

       get_string() {
        let res = this.year+' '+this.diploma+' '+this.faculty+' '+this.country+' '+this.search_string
        return res
       },
       search_form() {
            this.memories = this.memories_search
            let string_array = this.get_string().toLowerCase().split(' ')
            for (var i = string_array.length - 1; i >= 0; i--) {            
                this.memories = this.memories.filter(x => (
                    x.memoryYear.toLowerCase().includes(string_array[i]) || 
                    x.memoryTheme.toLowerCase().includes(string_array[i]) ||
                    x.memorySupervisor.toLowerCase().includes(string_array[i]) ||
                    x.personName.toLowerCase().includes(string_array[i]) ||
                    x.civility.toLowerCase().includes(string_array[i]) ||
                    x.memoryFaculty.toLowerCase().includes(string_array[i]) ||
                    x.memoryDiploma.toLowerCase().includes(string_array[i])
                ));
            }
            this.paginate()
       },
       paginate() {
            this.pages = []
            this.page = 1;
            for (var i = 0; i < this.memories.length; i++) {
                if (i % 25 == 0) {
                    this.pages.push(this.pages.length + 1)
                } 
            } 
       },
       memoryDownload(memoryId) {
            this.memoryId = memoryId
            console.log(this.memoryId)
       },
       downloadAdd() {
            this.loading = true

            let myHeaders = new Headers();
            myHeaders.append("Cookie", "PHPSESSID=mpq80tluh25l025v4fu644ilg6");

            let formdata = new FormData();
            formdata.append("country", this.country);
            formdata.append("email", this.email);
            formdata.append("profil", this.profil);
            formdata.append("name", this.name);
            formdata.append("memoryId", this.memoryId);


            let requestOptions = {
              method: 'POST',
              headers: myHeaders,
              body: formdata,
              redirect: 'follow'
            };

            fetch(API_URL+"memory-download", requestOptions)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                this.country = ""
                this.email = ""
                this.profil = ""
                this.name = ""

                this.success_message = "Veuillez consulter votre boîte mail pour télécharger le document. Merci"
                this.loading = false
            })
            .catch(error => {
                console.log('error')
            });
        },
        init() {
            let myHeaders = new Headers();
            myHeaders.append("Cookie", "PHPSESSID=mpq80tluh25l025v4fu644ilg6");

            let requestOptions = {
              method: 'GET',
              headers: myHeaders,
              redirect: 'follow'
            };

            this.loading = false

            fetch(API_URL+"memories", requestOptions)
            .then(response => response.json())
            .then(data => {
                this.memories = data
                this.memories_search = data
                this.paginate()
              })
              .catch(error => console.log('error', error));
        }
    }));








    Alpine.data('activitysuscribers', () => ({
       loading: false,
       email: '',
       activityId: '',
       name: '',
       sex: '',
       profil: '',
       nationality: '',
       country: '',
       city: '',
       belongInstitut: '',
       telNumber: '',
       articleTitle: '',
       articleAbstract: '',
       joinedFile: '',
       picture: '',
       section: '',
       success_message: '',
       activitysuscriber_add_form() {
            this.loading = true
            this.success_message = ""
            this.activityId = document.getElementById("activityId").textContent

            let myHeaders = new Headers();
            myHeaders.append("Cookie", "PHPSESSID=mpq80tluh25l025v4fu644ilg6");

            let formdata = new FormData();
            formdata.append("email", this.email);
            formdata.append("activityId", this.activityId);
            formdata.append("name", this.name);
            formdata.append("sex", this.sex);
            formdata.append("profil", this.profil);            
            formdata.append("nationality", this.nationality);
            formdata.append("country", this.country);
            formdata.append("city", this.city);
            formdata.append("belongInstitut", this.belongInstitut);
            formdata.append("telNumber", this.telNumber);            
            formdata.append("articleTitle", this.articleTitle);
            formdata.append("articleAbstract", this.articleAbstract);
            formdata.append("joinedFile", document.getElementById('joinedFile').files[0]);
            formdata.append("picture", document.getElementById('picture').files[0]);
            formdata.append("section", this.section);


            let requestOptions = {
              method: 'POST',
              headers: myHeaders,
              body: formdata,
              redirect: 'follow'
            };

            fetch(API_URL+"activitysuscriber-add", requestOptions)
            .then(response => response.json())
            .then(data => {
                
                this.email = ""
                this.activityId = ""
                this.name = ""
                this.sex = ""
                this.profil = ""
                this.nationality = ""
                this.country = ""
                this.city = ""
                this.belongInstitut = ""
                this.telNumber = ""
                this.articleTitle = ""
                this.articleAbstract = ""
                document.getElementById('joinedFile').files[0] = ""
                document.getElementById('picture').files[0] = ""               
                this.section = ""

                this.success_message = "Merci. Vous vous êtes bien inscrit au programme."
                this.loading = false
            })
            .catch(error => {
                console.log('error')
            });
       }
    }));




    Alpine.data('like', () => ({
            numberLove: 0,
            id: '',
            type: '',
            setCookie(cname,cvalue,exdays) {
              const d = new Date();
              d.setTime(d.getTime() + (exdays*24*60*60*1000));
              let expires = 'expires=' + d.toGMTString();
              document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
            },
            getCookie(cname) {
              let name = cname + '=';
              let decodedCookie = decodeURIComponent(document.cookie);
              let ca = decodedCookie.split(';');
              for(let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                  c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                  return c.substring(name.length, c.length);
                }
              }
              return '';
            },
            setColor(type, id) {
                return this.getCookie(type+''+id) != '' ? "yes" : "no"
            },
            hasLike(item) {
                return this.getCookie(item) != '' ? "isLiked" : ""
            },
            setNumberLove(type, id) {
                let myHeaders = new Headers();
                myHeaders.append("Cookie", "PHPSESSID=mpq80tluh25l025v4fu644ilg6");

                let add = this.getCookie(type+""+id)


                let formdata = new FormData();
                formdata.append("news", type);
                formdata.append("id", id);
                
                if (add !== "") {
                    formdata.append("add", 0);
                } else {
                    formdata.append("add", 1);
                }

                let requestOptions = {
                  method: 'POST',
                  headers: myHeaders,
                  body: formdata,
                  redirect: 'follow'
                };

                fetch(API_URL+"like", requestOptions)
                .then(response => response.json())
                .then(data => {
                    if (add !== "") {
                        this.setCookie(type+""+id, "", 365)
                    } else {
                        this.setCookie(type+""+id, id, 365)
                    }
                    this.numberLove = data.numberLove                

                    document.getElementById("numberLove"+id).innerHTML = this.numberLove

                    document.getElementById("like"+id).classList.toggle("isLiked")                  
                })
                  .catch(error => console.log('error', error));

            },
        }));







})