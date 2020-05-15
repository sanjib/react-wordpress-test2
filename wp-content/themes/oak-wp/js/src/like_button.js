'use strict';

class LikeButton extends React.Component {
    constructor(props) {
        super(props);
        this.commentID = props.commentID;
        this.state = {liked: false};
    }

    render() {
        if (this.state.liked) {
            console.log('you liked:', this.commentID);
            return 'You liked this.';
        }
        return (
                <button onClick={() => this.setState({liked: true})}>
                    Like
                </button>);
    }
}

document.querySelectorAll('.like_button_container')
        .forEach(domContainer => {
            // Read the comment ID from a data-* attribute.
            const commentID = parseInt(domContainer.dataset.commentid, 10);
            ReactDOM.render(
                    <LikeButton commentID={commentID} />,
                    domContainer
                    );
        });