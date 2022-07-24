import styles from "./Welcome.module.css";
import logo from "../../../public/logo.svg";

export default function Welcome(props) {
    const { repos } = props;

    return (
        <div className={styles.container}>
            <div className={styles.logo}>
                <img src={logo} alt="EPTIC Logo" width={300} height={100} />
            </div>
            <div className={styles.repoContainer}>
                {repos.map((repo) => (
                    <div key={repo.id} className={styles.repo}>
                        <div>
                            <a href={repo.html_url} className={styles.title}>
                                {repo.full_name}
                            </a>
                            <p className={styles.description}>
                                {repo.description}
                            </p>
                        </div>
                        <div className={styles.languageContainer}>
                            <span className={styles.language}>
                                {repo.language}
                            </span>
                            <span className={styles.license}>
                                {repo.license?.name}
                            </span>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}
