import React, { Component } from "react";

// const Contact = () => {
//     return (<h1>Contacts</h1>);
// }
    
// export default Contact;



class ShowContact extends Component{
    constructor(){
        super()
        this.state = {
            message: 'Contact Us'
        }
    }
    changeMessage(){
        this.setState({
            message: 'Thanks'
        })
    }
    render(){
        return(
            <div>
                <h1>{this.state.message}</h1>
                <button onClick={()=>this.changeMessage()}>Contact</button>
            </div>
        )
    }

}

export default ShowContact;