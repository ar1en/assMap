import React, { Component } from "react";

interface LoginFormProps {
    onSubmit: (username: string, password: string) => void;
}

interface LoginFormState {
    username: string;
    password: string;
}

class LoginForm extends Component<LoginFormProps, LoginFormState> {
    state = {
        username: "",
        password: "",
    };

    handleInputChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        const { name, value } = event.target;
        this.setState({ [name]: value } as Pick<LoginFormState, keyof LoginFormState>);
    };

    handleSubmit = (event: React.FormEvent<HTMLFormElement>) => {
        event.preventDefault();
        const { username, password } = this.state;
        this.props.onSubmit(username, password);
    };

    render() {
        const { username, password } = this.state;
        return (
            <form onSubmit={this.handleSubmit}>
                <div>
                    <label>
                        Username:
                        <input type="text" name="username" value={username} onChange={this.handleInputChange} />
                    </label>
                </div>
                <div>
                    <label>
                        Password:
                        <input type="password" name="password" value={password} onChange={this.handleInputChange} />
                    </label>
                </div>
                <button type="submit">Submit</button>
            </form>
        );
    }
}

export default LoginForm;
