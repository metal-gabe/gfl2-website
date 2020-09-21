import Head from 'next/head';
import styles from '../styles/Home.module.css';

const Home = () => {
	const styles = {
		alignItems: 'center',
		backgroundColor: '#3B3F31',
		color: '#ffffff',
		display: 'flex',
		justifyContent: 'center',
		margin: '0 auto',
		maxWidth: '1440px',
		minHeight: '100vh',
		outline: '1px solid red',
	};

	return <div style={styles}>I am your HOME!!!</div>;
};

export default Home;
