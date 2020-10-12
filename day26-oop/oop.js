

class User {
    constructor() {
        this.id = null;
        this.username = null;
        this.name = null;
        this.password = null;
        this.number_of_posts = 0;
        this.created_at = null;

        this.created_at = '2020-10-12';
    }

    dump() {
        console.log(this);
    }
}

let steve = new User;

steve.id = 1;
steve.username = 'steve';
steve.name = 'Stephen';

console.log('The name of user ' + steve.id + ' is ' + steve.name);

let bob = new User;

steve.dump();

bob.dump();