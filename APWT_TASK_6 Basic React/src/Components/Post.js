import React from "react";

const Post = (props)=>{

    const PostStyle={
        backgroundColor: "#7badd1",
        color:"#fff",
        padding: "10px",
    }

    return (
            <div style={PostStyle}>
                <span>{props.userId}</span>
                <span>{props.title}</span>
            </div>
                    
                    
    )

}
export default Post;