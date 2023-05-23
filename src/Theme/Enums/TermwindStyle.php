<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme\Enums;

use Minicli\Framework\Contracts\Theme\MiniEnum;

enum TermwindStyle: string implements MiniEnum
{
    case BLACK = 'black';

    case WHITE = 'white';
    case BRIGHTWHITE = 'bright-white';

    case SLATE_50 = 'slate-50';
    case SLATE_100 = 'slate-100';
    case SLATE_200 = 'slate-200';
    case SLATE_300 = 'slate-300';
    case SLATE_400 = 'slate-400';
    case SLATE_500 = 'slate-500';
    case SLATE_600 = 'slate-600';
    case SLATE_700 = 'slate-700';
    case SLATE_800 = 'slate-800';
    case SLATE_900 = 'slate-900';

    case GRAY = 'gray';
    case GRAY_50 = 'gray-50';
    case GRAY_100 = 'gray-100';
    case GRAY_200 = 'gray-200';
    case GRAY_300 = 'gray-300';
    case GRAY_400 = 'gray-400';
    case GRAY_500 = 'gray-500';
    case GRAY_600 = 'gray-600';
    case GRAY_700 = 'gray-700';
    case GRAY_800 = 'gray-800';
    case GRAY_900 = 'gray-900';

    case ZINC_50 = 'zinc-50';
    case ZINC_100 = 'zinc-100';
    case ZINC_200 = 'zinc-200';
    case ZINC_300 = 'zinc-300';
    case ZINC_400 = 'zinc-400';
    case ZINC_500 = 'zinc-500';
    case ZINC_600 = 'zinc-600';
    case ZINC_700 = 'zinc-700';
    case ZINC_800 = 'zinc-800';
    case ZINC_900 = 'zinc-900';

    case NEUTRAL_50 = 'neutral-50';
    case NEUTRAL_100 = 'neutral-100';
    case NEUTRAL_200 = 'neutral-200';
    case NEUTRAL_300 = 'neutral-300';
    case NEUTRAL_400 = 'neutral-400';
    case NEUTRAL_500 = 'neutral-500';
    case NEUTRAL_600 = 'neutral-600';
    case NEUTRAL_700 = 'neutral-700';
    case NEUTRAL_800 = 'neutral-800';
    case NEUTRAL_900 = 'neutral-900';

    case STONE_50 = 'stone-50';
    case STONE_100 = 'stone-100';
    case STONE_200 = 'stone-200';
    case STONE_300 = 'stone-300';
    case STONE_400 = 'stone-400';
    case STONE_500 = 'stone-500';
    case STONE_600 = 'stone-600';
    case STONE_700 = 'stone-700';
    case STONE_800 = 'stone-800';
    case STONE_900 = 'stone-900';

    case RED = 'red';
    case BRIGHTRED = 'bright-red';
    case RED_50 = 'red-50';
    case RED_100 = 'red-100';
    case RED_200 = 'red-200';
    case RED_300 = 'red-300';
    case RED_400 = 'red-400';
    case RED_500 = 'red-500';
    case RED_600 = 'red-600';
    case RED_700 = 'red-700';
    case RED_800 = 'red-800';
    case RED_900 = 'red-900';

    case ORANGE = 'orange';
    case ORANGE_50 = 'orange-50';
    case ORANGE_100 = 'orange-100';
    case ORANGE_200 = 'orange-200';
    case ORANGE_300 = 'orange-300';
    case ORANGE_400 = 'orange-400';
    case ORANGE_500 = 'orange-500';
    case ORANGE_600 = 'orange-600';
    case ORANGE_700 = 'orange-700';
    case ORANGE_800 = 'orange-800';
    case ORANGE_900 = 'orange-900';

    case AMBER_50 = 'amber-50';
    case AMBER_100 = 'amber-100';
    case AMBER_200 = 'amber-200';
    case AMBER_300 = 'amber-300';
    case AMBER_400 = 'amber-400';
    case AMBER_500 = 'amber-500';
    case AMBER_600 = 'amber-600';
    case AMBER_700 = 'amber-700';
    case AMBER_800 = 'amber-800';
    case AMBER_900 = 'amber-900';

    case YELLOW = 'yellow';
    case BRIGHTYELLOW = 'bright-yellow';
    case YELLOW_50 = 'yellow-50';
    case YELLOW_100 = 'yellow-100';
    case YELLOW_200 = 'yellow-200';
    case YELLOW_300 = 'yellow-300';
    case YELLOW_400 = 'yellow-400';
    case YELLOW_500 = 'yellow-500';
    case YELLOW_600 = 'yellow-600';
    case YELLOW_700 = 'yellow-700';
    case YELLOW_800 = 'yellow-800';
    case YELLOW_900 = 'yellow-900';

    case LIME_50 = 'lime-50';
    case LIME_100 = 'lime-100';
    case LIME_200 = 'lime-200';
    case LIME_300 = 'lime-300';
    case LIME_400 = 'lime-400';
    case LIME_500 = 'lime-500';
    case LIME_600 = 'lime-600';
    case LIME_700 = 'lime-700';
    case LIME_800 = 'lime-800';
    case LIME_900 = 'lime-900';

    case GREEN = 'green';
    case BRIGHTGREEN = 'bright-green';
    case GREEN_50 = 'green-50';
    case GREEN_100 = 'green-100';
    case GREEN_200 = 'green-200';
    case GREEN_300 = 'green-300';
    case GREEN_400 = 'green-400';
    case GREEN_500 = 'green-500';
    case GREEN_600 = 'green-600';
    case GREEN_700 = 'green-700';
    case GREEN_800 = 'green-800';
    case GREEN_900 = 'green-900';

    case EMERALD_50 = 'emerald-50';
    case EMERALD_100 = 'emerald-100';
    case EMERALD_200 = 'emerald-200';
    case EMERALD_300 = 'emerald-300';
    case EMERALD_400 = 'emerald-400';
    case EMERALD_500 = 'emerald-500';
    case EMERALD_600 = 'emerald-600';
    case EMERALD_700 = 'emerald-700';
    case EMERALD_800 = 'emerald-800';
    case EMERALD_900 = 'emerald-900';

    case TEAL_50 = 'teal-50';
    case TEAL_100 = 'teal-100';
    case TEAL_200 = 'teal-200';
    case TEAL_300 = 'teal-300';
    case TEAL_400 = 'teal-400';
    case TEAL_500 = 'teal-500';
    case TEAL_600 = 'teal-600';
    case TEAL_700 = 'teal-700';
    case TEAL_800 = 'teal-800';
    case TEAL_900 = 'teal-900';

    case CYAN = 'cyan';
    case BRIGHTCYAN = 'bright-cyan';
    case CYAN_50 = 'cyan-50';
    case CYAN_100 = 'cyan-100';
    case CYAN_200 = 'cyan-200';
    case CYAN_300 = 'cyan-300';
    case CYAN_400 = 'cyan-400';
    case CYAN_500 = 'cyan-500';
    case CYAN_600 = 'cyan-600';
    case CYAN_700 = 'cyan-700';
    case CYAN_800 = 'cyan-800';
    case CYAN_900 = 'cyan-900';

    case SKY_50 = 'sky-50';
    case SKY_100 = 'sky-100';
    case SKY_200 = 'sky-200';
    case SKY_300 = 'sky-300';
    case SKY_400 = 'sky-400';
    case SKY_500 = 'sky-500';
    case SKY_600 = 'sky-600';
    case SKY_700 = 'sky-700';
    case SKY_800 = 'sky-800';
    case SKY_900 = 'sky-900';

    case BLUE = 'blue';
    case BRIGHTBLUE = 'bright-blue';
    case BLUE_50 = 'blue-50';
    case BLUE_100 = 'blue-100';
    case BLUE_200 = 'blue-200';
    case BLUE_300 = 'blue-300';
    case BLUE_400 = 'blue-400';
    case BLUE_500 = 'blue-500';
    case BLUE_600 = 'blue-600';
    case BLUE_700 = 'blue-700';
    case BLUE_800 = 'blue-800';
    case BLUE_900 = 'blue-900';

    case INDIGO_50 = 'indigo-50';
    case INDIGO_100 = 'indigo-100';
    case INDIGO_200 = 'indigo-200';
    case INDIGO_300 = 'indigo-300';
    case INDIGO_400 = 'indigo-400';
    case INDIGO_500 = 'indigo-500';
    case INDIGO_600 = 'indigo-600';
    case INDIGO_700 = 'indigo-700';
    case INDIGO_800 = 'indigo-800';
    case INDIGO_900 = 'indigo-900';

    case VIOLET_50 = 'violet-50';
    case VIOLET_100 = 'violet-100';
    case VIOLET_200 = 'violet-200';
    case VIOLET_300 = 'violet-300';
    case VIOLET_400 = 'violet-400';
    case VIOLET_500 = 'violet-500';
    case VIOLET_600 = 'violet-600';
    case VIOLET_700 = 'violet-700';
    case VIOLET_800 = 'violet-800';
    case VIOLET_900 = 'violet-900';

    case PURPLE_50 = 'purple-50';
    case PURPLE_100 = 'purple-100';
    case PURPLE_200 = 'purple-200';
    case PURPLE_300 = 'purple-300';
    case PURPLE_400 = 'purple-400';
    case PURPLE_500 = 'purple-500';
    case PURPLE_600 = 'purple-600';
    case PURPLE_700 = 'purple-700';
    case PURPLE_800 = 'purple-800';
    case PURPLE_900 = 'purple-900';

    case FUCHSIA_50 = 'fuchsia-50';
    case FUCHSIA_100 = 'fuchsia-100';
    case FUCHSIA_200 = 'fuchsia-200';
    case FUCHSIA_300 = 'fuchsia-300';
    case FUCHSIA_400 = 'fuchsia-400';
    case FUCHSIA_500 = 'fuchsia-500';
    case FUCHSIA_600 = 'fuchsia-600';
    case FUCHSIA_700 = 'fuchsia-700';
    case FUCHSIA_800 = 'fuchsia-800';
    case FUCHSIA_900 = 'fuchsia-900';

    case PINK_50 = 'pink-50';
    case PINK_100 = 'pink-100';
    case PINK_200 = 'pink-200';
    case PINK_300 = 'pink-300';
    case PINK_400 = 'pink-400';
    case PINK_500 = 'pink-500';
    case PINK_600 = 'pink-600';
    case PINK_700 = 'pink-700';
    case PINK_800 = 'pink-800';
    case PINK_900 = 'pink-900';

    case ROSE_50 = 'rose-50';
    case ROSE_100 = 'rose-100';
    case ROSE_200 = 'rose-200';
    case ROSE_300 = 'rose-300';
    case ROSE_400 = 'rose-400';
    case ROSE_500 = 'rose-500';
    case ROSE_600 = 'rose-600';
    case ROSE_700 = 'rose-700';
    case ROSE_800 = 'rose-800';
    case ROSE_900 = 'rose-900';

    case MAGENTA = 'magenta';
    case BRIGHTMAGENTA = 'bright-magenta';

    case FONT_NORMAL = 'font-normal';
    case FONT_BOLD = 'font-bold';
    case FONT_ITALLIC = 'italic';
    case FONT_UNDERLINE = 'underline';
}
