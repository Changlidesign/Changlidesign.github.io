

// USERS TEMPLATE
[
  '{{repeat(10)}}',
  {
    id:'{{index(1)}}',
    name: '{{firstName()}} {{surname()}}',
    username: function() {
      return 'user'+this.id;
    },
    email: function() {
      return this.username+'@gmail.com';
    },
    password: 'md5(\'pass\')',
    date_create: 'NOW()',
    img: function(tags){
      return 'https://via.placeholder.com/400/'+
        tags.integer(700,999)+'/fff/?text='+
        this.username;
    }
  }
]




// ANIMALS TEMPLATE
[
  '{{repeat(50)}}',
  {
    id:'{{index(1)}}',
    uid: '{{integer(1,10)}}',
    name: '{{company()}}',
    type: '{{random("Grey Dwarf Hamster","Yellow Hamster","Teddy Bear Hamster","White Dwarf Hamster","Golden Hamster")}}',
    
    color: function(tags){
    var colors = {
        "Grey Dwarf Hamster" :'grey and white',
        "Yellow Hamster" :'yellow and brown',
        "Teddy Bear Hamster" :'brown and white',
        "White Dwarf Hamster" :'white and beige',
        "Golden Hamster" :'golden and white'
     };
       return colors[this.type];
   },
    img: function(tags){
      return 'https://via.placeholder.com/400/'+
        tags.integer(700,999)+'/fff/?text='+
        this.name;
    },
    description: '{{lorem(4,"sentences")}}',
    date_create: 'NOW()'
  }
]





// LOCATIONS TEMPLATE
[
  '{{repeat(150)}}',
  {
    id:'{{index(1)}}',
    aid: '{{integer(1,50)}}',
    
    lat: '{{floating(37.783624, 37.596809)}}',
    lng: '{{floating(-122.506784, -122.403541)}}',
    
    description: '{{lorem(4,"sentences")}}',
    photo: 'https://via.placeholder.com/400/',
    icon: 'https://via.placeholder.com/100/888/fff/?text=ICON',

    date_create: 'NOW()'
  }
]







[
  '{{repeat(5, 7)}}',
  {
    _id: '{{objectId()}}',
    index: '{{index()}}',
    guid: '{{guid()}}',
    isActive: '{{bool()}}',
    balance: '{{floating(1000, 4000, 2, "$0,0.00")}}',
    picture: 'http://placehold.it/32x32',
    age: '{{integer(20, 40)}}',
    eyeColor: '{{random("blue", "brown", "green")}}',
    name: '{{firstName()}} {{surname()}}',
    gender: '{{gender()}}',
    company: '{{company().toUpperCase()}}',
    email: '{{email()}}',
    phone: '+1 {{phone()}}',
    address: '{{integer(100, 999)}} {{street()}}, {{city()}}, {{state()}}, {{integer(100, 10000)}}',
    about: '{{lorem(1, "paragraphs")}}',
    registered: '{{date(new Date(2014, 0, 1), new Date(), "YYYY-MM-ddThh:mm:ss Z")}}',
    latitude: '{{floating(-90.000001, 90)}}',
    longitude: '{{floating(-180.000001, 180)}}',
    tags: [
      '{{repeat(7)}}',
      '{{lorem(1, "words")}}'
    ],
    friends: [
      '{{repeat(3)}}',
      {
        id: '{{index()}}',
        name: '{{firstName()}} {{surname()}}'
      }
    ],
    greeting: function (tags) {
      return 'Hello, ' + this.name + '! You have ' + tags.integer(1, 10) + ' unread messages.';
    },
    favoriteFruit: function (tags) {
      var fruits = ['apple', 'banana', 'strawberry'];
      return fruits[tags.integer(0, fruits.length - 1)];
    }
  }
]