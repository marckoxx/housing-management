// useThemeToggle.js
import { useTheme } from 'vuetify';

export default function useThemeToggle() {
  const theme = useTheme();

  function toggleTheme() {
    theme.global.name.value = theme.global.current.value.dark ? 'light' : 'dark';
  }

  return {
    toggleTheme
  };
}